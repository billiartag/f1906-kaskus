<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    public $table     = 'users';
    public $primaryKey   = 'username';
    public $timestamps = false;
    
    public function insertdata($username,$password,$email,$nama,$nomor,$tgl_lahir_user,$jk_user,$bio_profil,$alamat_user,
    $negara_user,$provinsi_user,$ctr_post,$join_date,$jabatan_user)
    {
        $baru                   = new user();
        $baru->username         = $username;
        $baru->password         = $password;
        $baru->nama             = $nama;
        $baru->email            = $email;
        $baru->nomor            = $nomor;
        $baru->tgl_lahir_user   = $tgl_lahir_user;
        $baru->jk_user          = $jk_user;
        $baru->bio_profil       = $bio_profil;
        $baru->alamat_user      = $alamat_user;
        $baru->negara_user      = $negara_user;
        $baru->provinsi_user    = $provinsi_user;
        $baru->ctr_post         = $ctr_post;
        $baru->join_date        = $join_date;
        $baru->jabatan_user     = $jabatan_user;
        $baru->save();
    }
    public function ceklogin($username,$password)
    {
        $query = user::select('users.username', 'users.password')
            ->where('users.username', '=', $username)
            ->where('users.password', '=', $password)
            ->get()->count(); 
        return $query; 
    }
}
