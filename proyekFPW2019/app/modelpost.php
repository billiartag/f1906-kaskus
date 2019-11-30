<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelpost extends Model
{
    public $table       = 'posts';
    public $primaryKey  = 'id_post';
    public $timestamps  = false;

    public function buatpost($id_post,$waktu_post,$isi_post,$id_kategori_post,$ctr_cendol,$ctr_bata,$reply_post,$user_poster){
        $baru                   = new modelpost();
        $baru->id_post          = $id_post;
        $baru->waktu_post       = $waktu_post;
        $baru->isi_post         = $isi_post;
        $baru->id_kategori_post = $id_kategori_post;
        $baru->ctr_cendol       = $ctr_cendol;
        $baru->ctr_bata         = $ctr_bata;
        $baru->reply_post       = $reply_post;
        $baru->user_poster      = $user_poster;
        $baru->save();
    }
}
