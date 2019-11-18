<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\member;

class GuestController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	public function index() 
	{
		return view("dashboard");  
	}
	
	public function dashboard() 
	{
		return view("dashboard");
	}

	public function story() 
	{
		return view("story");
	}
	
	public function daftar() 
	{
		return view("daftar");
	}
	
	public function register(Request $request)
	{
		$dbmember 	= new member(); 

		if($request->btnsimpan)		// jika btnsimpan ditekan
		{
			$username 	= $request->txtusername; 
			$dbmember->insert($username); 
		}

		$data['allmember'] = $dbmember->getallmember(); 		
		return view("register", $data); 
	}

}