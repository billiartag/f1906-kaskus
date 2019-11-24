<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class UserController extends Controller
{
    public function toProfile(){
        return view("profile");
    }
    public function logout(){
		Session::forget("namelogin");
        return view("dashboard");
    }
}
