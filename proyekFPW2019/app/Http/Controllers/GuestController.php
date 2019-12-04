<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;
use App\modelpost;
use App\foto_profil;
use App\thread_post;
use Session;
use DB;
use Auth;

class GuestController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	public function index() 
	{
		return view("dashboard");  
	}
	
	public function story() 
	{
		return view("story");
	}
	
	public function toDaftar(){
		if(Auth::check()){
			return view("profile");
		}
		else{
			return view("register");
		}
	}
	public function showKategori($id_kat){
		$data['id_kat']=$id_kat;
		//get detail thread
		$detail = DB::select("SELECT * FROM KATEGORIS WHERE ID_KATEGORI = $id_kat");
		//get all thread
		$threads  =DB::select("SELECT * FROM thread_posts WHERE id_kategori_thread = $id_kat");
		//get all user
		$users  =DB::select("SELECT * FROM USERS");

		$data['detail'] = $detail;
		$data['threads'] = $threads;
		$data['users'] = $users;
		//
		return view("kategorithread",$data);
	}
	public function daftar(Request $request) {
		$request->validate([
			"username"=>"required",
			"password"=>"required",
			"email"=>"required|email",
		]);
		if($request->btndaftar)
		{
			//declare
			$dbuser			= new User(); 
			$username 		= $request->username; 
			$password 		= $request->password;
			$email	 		= $request->email; 
			
			//cek ada
			$allUser=DB::table("users")->where("username",$username)->count();

			//kalau ada
			if($allUser>0){
				Session::flash("gagal","Username sudah ada, gunakan username yang lain!");
			}
			else{
				//kalau gaada
				$nama			= "-";
				$nomor 			= "-";
				$jk_user 		= 0;
				$tgl_lahir_user	= date('Y-m-d H:i:s');
				$bio_profil		= "-";
				$alamat_user	= "-";
				$negara_user	= "-";
				$provinsi_user	= "-";
				$ctr_post		= 0;
				$join_date		= date('Y-m-d H:i:s');
				$jabatan_user	= "newbie";
				$dbuser->insertdata($username,$password,$email,$nama,$nomor,$tgl_lahir_user,$jk_user,$bio_profil,$alamat_user,
				$negara_user,$provinsi_user,$ctr_post,$join_date,$jabatan_user); 
				Session::flash("berhasil","Akun anda berhasil didaftarkan");
			}
		}
		return view("daftar");
	}

	public function dashboard(Request $request){
		if($request->btnlogin)
		{
			$dbuser			= new User(); 
			$username 		= $request->txtusername; 
			$password 		= $request->txtpassword;
			$jumbar 		= $dbuser->ceklogin($username,$password); 
			
			if($jumbar == 0) {
				$data['message'] = "gagal";
				return view("daftar", $data);
			}
			else {
				$data['message'] = "sukses"; 
				session()->put('namelogin',$username);
				return view("profile", $data);
			}
		}
		else {
			return view("dashboard");
		}
	}

	public function showPost($id_thread, $id_post=null){
		$semua_post = DB::select("SELECT * FROM POSTS WHERE id_sumber = '$id_thread'");
		$semua_user = DB::select("SELECT * FROM USERS");
		$isi_thread = DB::select("SELECT * FROM THREAD_POSTS WHERE ID_THREAD=$id_thread");

		$data['posts']=$semua_post;
		$data['users']=$semua_user;
		$data['isi_thread']=$isi_thread;
		$data['user_sekarang']=Auth::user();
		if($id_post!=null){
			$data['id_post']=$id_post;
		}
		//get ctr
		$ctr = thread_post::find($id_thread)->ctr_viewers;
		//update
		$thread = thread_post::find($id_thread);
		$thread->ctr_viewers = $ctr+1;
		$thread->save();

		return view("post",$data);
	}

	public function createpost(Request $request){
		
		if($request->btnpost)
		{
			$dbmodelpost 		= new modelpost();
			$user_poster      	= $request->tuser;
			$isi_post         	= $request->isipost; 
			$id_post        	= null;
			$waktu_post      	= date('Y-m-d');
			$id_kategori_post  	= $request->forum_id;
			$ctr_cendol       	= 0;
			$ctr_bata        	= 0;
			$reply_post       	= 0;
			
			$dbmodelpost->buatpost($id_post,$waktu_post,$isi_post,$id_kategori_post,$ctr_cendol,$ctr_bata,$reply_post,$user_poster); 
			$data['message'] = "berhasil Post anda telah terpublish";
			$this->nambahCount($request->tuser);
			$this->nambahReply($id_thread);

			//get id thread
			// $pst = App\thread_post::where(["wakktu_post_thread"=>$waktu_post, "judul_thread"=>])
			return redirect("post/$id_thread");
		}else{
			//ambil data semua kategori yang ada
			$kategori=DB::select("SELECT * FROM KATEGORIS");
			$data['kategori']=$kategori;
			return view("createpost",$data);
		}		
	}
	public function createpostReply(Request $request,$id_thread, $id_post_balas=null,$kutip=null){
		if($request->btnpost)
		{
			$string_kutipan="";
			if($kutip!=null){
				//ambil kutipan
				if($kutip=="true"){
					$data_kutipan = DB::select("SELECT * FROM POSTS WHERE ID_POST='$id_post_balas'");
					$isi_kutipan = $data_kutipan[0]->isi_post;
					$string_kutipan = "<div class='reply_kutipan'><p>Dikutip dari <a href='".url("/post/$id_thread/$id_post_balas")."'>Post #$id_post_balas</a>: ".$isi_kutipan."</p></div>";
				}}

			$dbmodelpost 		= new modelpost();
			$user_poster      	= $request->tuser;
			$isi_post         	= $string_kutipan.$request->isipost; 
			$id_post        	= null;
			$waktu_post      	= date('Y-m-d H:i:s');
			$id_kategori_post  	= $request->forum_id;
			$ctr_cendol       	= 0;
			$ctr_bata        	= 0;
			$reply_post       	= $id_post_balas;
			$id_sumber          = $id_thread;
			
			$dbmodelpost->buatpost($id_post,$waktu_post,$isi_post,$id_kategori_post,$ctr_cendol,$ctr_bata,$reply_post,$user_poster,$id_sumber); 
			$data['message'] = "berhasil Post anda telah terpublish";
			$this->nambahCount($request->tuser);
			$this->nambahReply($id_thread);
			return redirect("post/$id_thread");
		}else{
			//ambil data semua kategori yang ada
			$kategori=DB::select("SELECT * FROM KATEGORIS");
			$detail_thread = DB::select("SELECT * FROM THREAD_POSTS WHERE ID_THREAD='$id_thread'");
			$data['kategori']=$kategori;
			$data['jenis_post']="reply";
			$data['id_thread']=$id_thread;
			$data['detail_thread']=$detail_thread;
			$data['id_post_balas']=$id_post_balas;
			if($kutip=="true"){
				$data['kutip']="true";}
			return view("createpost",$data);
		}		
	}

	public function createThread(Request $request){
		if($request->btnpost)
		{

			$waktu = date('Y-m-d');
			//buat threadnya
			DB::table("thread_posts")->insert([
				"id_thread"=>0,
				"waktu_post_thread"=>$waktu,
				"ctr_reply"=>0,
				"ctr_viewers"=>0,
				"id_kategori_thread"=>$request->forum_id,
				"thread_locked"=>"false",
				"judul_thread"=>$request->judulpost,
				"user_poster"=>$request->tuser,
				"ctr_cendol"=>0
			]);

			//get id thread
			$row_post = DB::select("SELECT * FROM THREAD_POSTS WHERE ID_KATEGORI_THREAD='$request->forum_id' AND JUDUL_THREAD='$request->judulpost' AND USER_POSTER='$request->tuser' AND WAKTU_POST_THREAD='$waktu'");
			
			//buat postnya
			$dbmodelpost 		= new modelpost();
			$user_poster      	= $request->tuser;
			$isi_post         	= $request->isipost; 
			$id_post        	= null;
			$waktu_post      	= date('Y-m-d');
			$id_kategori_post  	= $request->forum_id;
			$id_sumber 			= $row_post[0]->id_thread;
			$ctr_cendol       	= 0;
			$ctr_bata        	= 0;
			$reply_post       	= 0;
			
			$dbmodelpost->buatpost($id_post,$waktu_post,$isi_post,$id_kategori_post,$ctr_cendol,$ctr_bata,$reply_post,$user_poster,$id_sumber); 


			$data['message'] = "berhasil Post anda telah terpublish";
			$this->nambahCount($request->tuser);
			return redirect("post/".$row_post[0]->id_thread);
		}else{
			//ambil data semua kategori yang ada
			$kategori=DB::select("SELECT * FROM KATEGORIS");
			$data['kategori']=$kategori;
			$data['jenis_post']="thread";
			return view("createpost",$data);
		}
	}

	public function nambahCount($id_user){
		//get ctr
		$ctr = User::find($id_user)->ctr_post;

		//update
		$user = User::find($id_user);
		$user->ctr_post = $ctr+1;
		$user->save();
	}
	public  function nambahReply($id_thread){

		//get ctr
		$ctr = thread_post::find($id_thread)->ctr_reply;
		//update
		$thread = thread_post::find($id_thread);
		$thread->ctr_reply = $ctr+1;
		$thread->save();
	}
}