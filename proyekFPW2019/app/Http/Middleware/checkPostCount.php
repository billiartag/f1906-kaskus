<?php

namespace App\Http\Middleware;

use Closure;
use \App\jabatan;
use \App\User;

class checkPostCount
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->btnpost){
            //find user
            $user_sek = \App\User::find($request->tuser);
            //get jabatan values 
            $jabatan_all = \App\jabatan::all()->sortByDesc("minimum_jabatan");
            $jabatan_sekarang = "";
            foreach ($jabatan_all as $row) {
                if($row->minimum_jabatan<=$user_sek->ctr_post){
                    $jabatan_sekarang = $row->gelar_jabatan;
                    break;
                }
            }
            //update user value
            $user_sek->jabatan_user = $jabatan_sekarang;
            $user_sek->save();
    }
        return $next($request);
    }
}
