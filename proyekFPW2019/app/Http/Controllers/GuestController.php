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
			$id_kategori_post  	= 0;
			$ctr_cendol       	= 0;
			$ctr_bata        	= 0;
			$reply_post       	= 0;
			
			$dbmodelpost->buatpost($id_post,$waktu_post,$isi_post,$id_kategori_post,$ctr_cendol,$ctr_bata,$reply_post,$user_poster); 
			$data['message'] = "berhasil Post anda telah terpublish";
			return view("dashboard",$data);
		}else{
			return view("createpost");
		}
				
	}
}