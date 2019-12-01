<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;
use App\modelpost;
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
	public function daftar(Request $request) 
	{
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
				$nama			= "";
				$nomor 			= "";
				$jk_user 		= 0;
				$tgl_lahir_user	= date('Y-m-d H:i:s');
				$bio_profil		= "";
				$alamat_user	= "";
				$negara_user	= "";
				$provinsi_user	= "";
				$ctr_post		= 0;
				$join_date		= date('Y-m-d H:i:s');
				$jabatan_user	= "";
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

	public function createpost(Request $request){
		if($request->btnpost)
		{
			$dbmodelpost 		= new modelpost();
			$user_poster      	= $request->tuser;
			$isi_post         	= $request->isipost; 
			$id_post        	= null;
			$waktu_post      	= date('Y-m-d H:i:s');
			$id_kategori_post  	= $request->forum_id;
			$ctr_cendol       	= 0;
			$ctr_bata        	= 0;
			$reply_post       	= 0;
			
			$dbmodelpost->buatpost($id_post,$waktu_post,$isi_post,$id_kategori_post,$ctr_cendol,$ctr_bata,$reply_post,$user_poster); 
			$data['message'] = "berhasil Post anda telah terpublish";
			return view("dashboard",$data);
		}else{
			//ambil data semua kategori yang ada
			$kategori=DB::select("SELECT * FROM KATEGORIS");
			$data['kategori']=$kategori;
			return view("createpost",$data);
		}
				
	}

	public function createThread(Request $request){
		if($request->btnpost)
		{
			//buat postnya dulu
			$dbmodelpost 		= new modelpost();
			$user_poster      	= $request->tuser;
			$isi_post         	= $request->isipost; 
			$id_post        	= null;
			$waktu_post      	= date('Y-m-d H:i:s');
			$id_kategori_post  	= $request->forum_id;
			$ctr_cendol       	= 0;
			$ctr_bata        	= 0;
			$reply_post       	= 0;
			
			$dbmodelpost->buatpost($id_post,$waktu_post,$isi_post,$id_kategori_post,$ctr_cendol,$ctr_bata,$reply_post,$user_poster); 

			//get id post
			$row_post = DB::select("SELECT * FROM POSTS WHERE ISI_POST='$isi_post' AND USER_POSTER='$user_poster'");
			
			//buat threadnya teros
			DB::table("thread_posts")->insert([
				"id_thread"=>0,
				"waktu_post_thread"=>date('Y-m-d H:i:s'),
				"ctr_reply"=>0,
				"ctr_viewers"=>0,
				"id_kategori_thread"=>$request->forum_id,
				"thread_locked"=>"false",
				"judul_thread"=>$request->judulpost,
				"user_poster"=>$request->tuser,
				"id_post_sumber"=>$row_post[0]->id_post,
				"ctr_cendol"=>0
			]);

			$data['message'] = "berhasil Post anda telah terpublish";
			return view("dashboard",$data);
		}else{
			//ambil data semua kategori yang ada
			$kategori=DB::select("SELECT * FROM KATEGORIS");
			$data['kategori']=$kategori;
			$data['jenis_post']="thread";
			return view("createpost",$data);
		}
				
	}
}