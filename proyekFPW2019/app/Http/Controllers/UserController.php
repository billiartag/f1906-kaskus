<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
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
}
