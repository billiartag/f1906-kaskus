<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{
    protected $table     = 'users';
    protected $primaryKey   = 'username';
    protected $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'password',
        'nama',
        'email',
        'nomor',
        'jk_user',
        'tgl_lahir_user',
        'bio_profil',
        'alamat_user',
        'negara_user',
        'provinsi_user',
        'ctr_post',
        'join_date',
        'jabatan_user',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function ceklogin($username,$password)
    {
        $query = user::select('users.username', 'users.password')
            ->where('users.username', '=', $username)
            ->where('users.password', '=', $password)
            ->get()->count(); 
        return $query; 
    }
    public function cekuser($username){
        return user::where('username','=',$username)->count();
    }
    
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
}
