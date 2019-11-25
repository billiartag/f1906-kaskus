<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;

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
	
	public function daftar(Request $request) 
	{
		$data['error'] = "semua field harus diisi";
		if($request->btndaftar)
		{
			
			$dbuser			= new user(); 
			$username 		= $request->username; 
			$password 		= $request->password;
			$email	 		= $request->email; 
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
			if($dbuser->cekuser($username)!=0){
				$dbuser->insertdata($username,$password,$email,$nama,$nomor,$tgl_lahir_user,$jk_user,$bio_profil,$alamat_user,
				$negara_user,$provinsi_user,$ctr_post,$join_date,$jabatan_user); 
				$data['error'] = null;
			}
			else{
				$data ['error'] = "username sudah terpakai";
			}
		}
		return view("daftar",$data);
	}

	public function dashboard(Request $request){
		if($request->btnlogin)
		{
			$dbuser			= new user(); 
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
}