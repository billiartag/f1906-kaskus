<?php

namespace App\Http\Controllers;

use App\foto_profil;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Storage;
use Auth;
use DB;
use App\post;
use App\thread_post;
use App\kategori;
use App\User;
use App\follow;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function toProfile($page_number=0){
        //get jumlah followers, post, thread
        $post = new post;
        $thread = new thread_post;
        $kategori = new kategori;
        $follow = new follow;
        
        $data['followers'] = $follow->where('id_following','=',Auth::user()->username)->get();
        $data['following'] = $follow->where('id_user','=',Auth::user()->username)->get();
        
        $data['count_followers'] = $follow->where('id_following','=',Auth::user()->username)->count();
        $data['count_following'] = $follow->where('id_user','=',Auth::user()->username)->count();
            


        $isi_post = $post->where('user_poster','=',Auth::user()->username)->count();
        if($isi_post!=0){
            $posts = $post->where('user_poster','=',Auth::user()->username)->get();
            $ctr_post = 0;
            $ctr_thread = 0;
            $data['post'] = $post->where('user_poster','=',Auth::user()->username)->skip($page_number*5)->take(5)->get();
            $data['thread'] = $thread->where('user_poster','=',Auth::user()->username)->get();

            

            $kategoris = $kategori->get();
            foreach($kategoris as $row){
                $data['kategori'][$row['id_kategori']] = $row['nama_kategori'];
            }
            // var_dump($data['kategori']);
            foreach($posts as $row){
                if($row['reply_post']==0){
                    $ctr_thread++;
                }
                else{
                    $ctr_post++;
                }
            }
            $data['isi_post'] = $ctr_post;
            $data['isi_thread'] = $ctr_thread;
            
        }
        else{
            $data['isi_post'] = $isi_post;
            $data['isi_thread'] = 0;
        }

        //get foto profil dan background
        $foto = new foto_profil;
        $src = $foto->where('id_profil_foto','=',Auth::user()->username)->get('source_foto');
        if($foto->where('id_profil_foto','=',Auth::user()->username)->count()!=0){
            $data['src_profil'] = $src[0]['source_foto'];
            $src2 = $foto->where('id_profil_foto','=',Auth::user()->username)->get('source_foto_background');
            $data['src_background'] = $src2[0]['source_foto_background'];
            if($data['src_profil']==""||$data['src_profil']==null){
                $data['src_profil'] = "default_profile_picture.png";
            }
            if($data['src_background']==""||$data['src_background']==null){
                $data['src_background'] = "default_background.jpg";
            }
            //echo "<img src='http://127.0.0.1:8000/storage/".($src2[0]['source_foto_background'])."'>";   
        }
        else{
            $data['src_profil'] = "default_profile_picture.png";
            $data['src_background'] = "default_background.jpg";
        } 
        return view("profile",$data);
    }
    public function newPost(){
        
        return view("createpost");
    }
    public function logout(){
        Auth::logout();
        return view("dashboard");
    }
    public function update_data(Request $request){
        $request->validate([
            "nama" => "required",
            "email" => "required|email",
            "gender" => "required"
            
        ]);
        $data = [
            "nama" =>$request->input('nama'),
            "email" =>$request->input('email'),
            "jk_user" =>$request->input('gender'),
            "nomor" => $request->input('nomor'),
            "tgl_lahir_user" => $request->input('tgl_lahir'),
            "negara_user" => $request->input('negara'),
            "provinsi_user" => $request->input('provinsi'),
            "bio_profil" => $request->input('bio'),
            "alamat_user" => $request->input('alamat'),
        ];
        if($data['nomor']==null){
            $data['nomor'] = "";
        }
        if($data['bio_profil']==null){
            $data['bio_profil'] = "";
        }

        $user = new User;
        //$user->update($data);
        $user->where('username','=',Auth::user()->username)->update($data);
        //var_dump($data);
        return redirect('profile');  
    }
    public function buatKategori($nama,$deskripsi){
        DB::table("kategoris")->insert([
            "id_kategori"=>0,
            "nama_kategori"=>"$nama",
            "detail_kategori"=>"$deskripsi",
            "id_user_follow_kategori"=>"-",
            "ctr_follow_kategori"=>0
        ]);

    }
    public function upload_profile_picture(Request $request){
        $profil_pict = new foto_profil;
        $path = $request->file('profile_picture')->store('profile_pictures');
        $cek_ada = $profil_pict->where('id_profil_foto','=',Auth::user()->username)->count();
        if($cek_ada!=0){
            Storage::delete($profil_pict->where('id_profil_foto','=',Auth::user()->username)->get('source_foto'));
            $update_source = [
                "source_foto" => $path
            ];
            $profil_pict->where('id_profil_foto','=',Auth::user()->username)->update($update_source);
        }
        else{
            $profil_pict->id_profil_foto = Auth::user()->username;
            $profil_pict->source_foto = $path;
            $profil_pict->source_foto_background = "";
            $profil_pict->save();
        }
        return redirect('/profile');
    }
    public function upload_background_picture(Request $request){
        $profil_pict = new foto_profil;
        $path = $request->file('background_picture')->store('background_profiles_pictures');
        $cek_ada = $profil_pict->where('id_profil_foto','=',Auth::user()->username)->count();
        if($cek_ada!=0){
            Storage::delete($profil_pict->where('id_profil_foto','=',Auth::user()->username)->get('source_foto_background'));
            $update_source = [
                "source_foto_background" => $path
            ];
            $profil_pict->where('id_profil_foto','=',Auth::user()->username)->update($update_source);
        }
        else{
            $profil_pict->id_profil_foto = Auth::user()->username;
            $profil_pict->source_foto = "";
            $profil_pict->source_foto_background = $path;
            $profil_pict->save();
        }
        return redirect('/profile');
    }
    public function _follow(Request $request){
        $user = $request->input('user');
        $user_following = $request->input("user_following");
        $follow = new follow;
        $follow->id_user = $user;
        $follow->id_following = $user_following;
        $follow->save();
        $saved = $follow->save;
        return $saved;

    }
}
