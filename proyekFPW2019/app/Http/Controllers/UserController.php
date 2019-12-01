<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Auth;
use DB;
use App\User;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function toProfile(){
        
        return view("profile");
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
        $user = new User;
        //$user->update($data);
        $user->where('username','=',Auth::user()->username)->update($data);
        //var_dump($data);
        return view('profile');       
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
}
