<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Auth;
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
        ];

        // \DB::table('Users')->where('username','=',Auth::user()->username)->update($data);
        //var_dump($data);
        //return view('edit_profile');
    
        
    }
}
