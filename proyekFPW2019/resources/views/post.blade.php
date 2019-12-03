
@extends(Session::has("namelogin")?"layouts/pageUser":"layouts/page")
@section('judul_page',"Post | Kaskus")
@section('isi')
<style>
    .kotak{
        background-color: white;
        padding: 15px;
        margin: 10px;
        border-radius: 5px;
        margin-bottom: 25px;
    }
    #kontainer_kiri{
    }
    #reply-box{
        background-color: #484848
    }
    #poster_thread{
        size: 5pt
    }
    .reply_kutipan{
        background-color: cornsilk;
    }
    .per_reply{
        border: 1px solid black;
        border-radius: 5px;
        padding: 1%;
        margin:1%;
    }
    .nama{
        font-weight: bold
    }
    hr{
        background-color: gray
    }
    img{
        margin-right: 5px;
    }
</style>
    <div id="kontainer-besar" class="row container">
        <div class="col-md-2"></div>
        <div id="kontainer_kiri" class="col-md-7">            
            <div name="kontainer-thread" class="kotak mx-auto">
                <div id="poster_thread" class="small d-inline">
                    <?php 
                        //get poster detail
                        $user_poster  = null;
                        foreach ($users as $row_user) {
                            if($row_user->username==$posts[0]->user_poster){
                                $user_poster = $row_user;
                            }
                        }    
                    ?>
                    <p>
                        <img src="https://i.pravatar.cc/50" id="gambar_poster" class="pull-left img-circle">
                        <span class="pull-right">
                            <span id="report_thread"><a href="#"><i class="material-icons">menu</i></a></span>
                        </span>
                        <span>
                            <span id="nama_poster" class="nama"><a href="#"><?php echo $user_poster->nama?></a></span>
                            &nbsp;&nbsp;
                            <span id="waktu_post"><?=$posts[0]->waktu_post?></span>
                        </span>
                        <br>
                        <span>
                            <span id="poster_rank"><?=$user_poster->jabatan_user?></span>•
                            <span id="poster_jumlah">Posts: <a href="<?=url("profile/$user_poster->username")?>"><?=$user_poster->ctr_post?></a></span>•
                            <span id="poster_karma">2000</span>
                        </span>
                    </p>
                </div>
                <hr>
                <div name="judul_thread">
                    <p><h4><?=$isi_thread[0]->judul_thread?></h4></p>
                </div>
                <hr>
                <div name="isi_thread">
                    <?=$posts[0]->isi_post?>
                </div>
                <div class="post_liker">
                    <span>
                        <img src="https://i.pravatar.cc/20" class="img-circle">
                        <img src="https://i.pravatar.cc/21" class="img-circle">
                        <img src="https://i.pravatar.cc/19" class="img-circle">
                        <span>Liked this</span>
                    </span>
                </div>
                <hr>
                <div class="post_footer">
                        <div class="row" style="padding:2%">
                        <a href='<?=url("/createpost\/").$isi_thread[0]->id_thread."/".$posts[0]->id_post."/true"?>'>Kutip</a>
                        <a href='<?=url("/createpost\/").$isi_thread[0]->id_thread."/".$posts[0]->id_post?>' class='btn btn-primary'>Balas</a>
                        </div>
                    
                </div>
            </div>
            <div name="kontainer-reply" class="kotak mx-auto">
                
            <?php for ($i=1; $i < sizeof($posts); $i++) {      
                //get poster detail
                $user_reply  = null;
                foreach ($users as $row_user) {
                    if($row_user->username==$posts[$i]->user_poster){
                        $user_reply = $row_user;
                    }
                }    
                ?>
                <div class="per_reply">
                    <div id="poster_reply" class="small d-inline">
                        <p>
                            <img src="https://i.pravatar.cc/49" id="gambar_poster" class="pull-left img-circle">
                            <span class="pull-right">
                                <span id="nomor_reply"><a href="#"><?=$posts[$i]->id_post?></a></span>
                                <span id="report_reply"><a href="#" class="pull-right"><i class="material-icons">menu</i></a></span>
                            </span>
                            <span>
                                <span id="nama_reply" class="nama"><a href="#"><?=$posts[$i]->user_poster?></a></span>
                                <span id="waktu_reply"><?=$posts[$i]->waktu_post?></span>
                            </span>
                            <br>
                            <span>
                                <span id="reply_rank"><?=$user_reply->jabatan_user?></span>•
                                <span id="reply_jumlah">Posts: <a href="#"><?=$user_reply->ctr_post?></a></span>•
                                <span id="reply_karma">0</span>
                            </span>
                        </p>
                    </div>
                    <hr>
                    <div class="isi_reply">
                        <?=$posts[$i]->isi_post?>
                    </div>
                    <div class="post_liker">
                        <span>
                            <img src="https://i.pravatar.cc/22" class="img-circle">
                            <span>Liked this</span>
                        </span>
                    </div>
                    <hr>
                    <div class="post_footer">
                        <div class="interact pull-right">
                            <a href="">Kutip</a>
                            <a href="">Balas</a>
                        </div>
                        <div class="karma">
                            <span>                                
                                <a href="#"><i class="material-icons text-success">arrow_upward</i></a>
                                10
                                <a href="#"><i class="material-icons text-danger">arrow_downward</i></a>
                            </span>
                        </div>
                    </div>
                    </div>
                <?php 
            }
            ?>
            </div>
        </div>
        <div id="kontainer_kanan" class="col-md-3">
            <div id="kontainer_kategori" class="kotak">
                <span>
                    <i class="material-icons pull-left">emoji_food_beverage</i>
                    <h4>The Lounge</h4>
                </span>
                <p>
                    Forum bagi Kaskuser untuk berbagi gosip, gambar, foto, dan video yang seru, lucu, serta unik.
                </p>
                <input type="button" class="btn btn-warning" value="Subscribe">
                <br><br>
                <input type="button" class="btn btn-primary form-control" value="Buat Thread Sekarang">
            </div>
            <div id="kontainer_rekomendasi" class="kotak">
                <span>
                    <i class="material-icons pull-left">thumb_up</i>
                    <h4>Thread Rekomendasi</h4>
                </span>
                <div class="post_rekomen">
                    <img src="https://picsum.photos/60" class="pull-right">
                    <p>Judul rekomendasi</p>
                    <a href="#">The Lounge</a>  
                    <br>   
                </div><hr>
                <div class="post_rekomen">
                    <img src="https://picsum.photos/61" class="pull-right">
                    <p>Judul rekomendasi</p>
                    <a href="#">Komputer</a>  
                    <br>   
                </div><hr>
                <div class="post_rekomen">
                    <img src="https://picsum.photos/59" class="pull-right">
                    <p>Judul rekomendasi</p>
                    <a href="#">The Lounge</a>  
                    <br>   
                </div>
            </div>
            <div id="kontainer_hot" class="kotak">
                <span>
                    <i class="material-icons pull-left">fireplace</i>
                    <h4>Thread Hot!</h4>
                </span>
                <div class="post_hot">
                    <img src="https://picsum.photos/60" class="pull-right">
                    <p>Judul hot1</p>
                    <a href="#">The Lounge</a>  
                    <br>   
                </div><hr>
                <div class="post_hot">
                    <img src="https://picsum.photos/61" class="pull-right">
                    <p>Judul hot2</p>
                    <a href="#">Surabaya</a>  
                    <br>   
                </div><hr>
                <div class="post_hot">
                    <img src="https://picsum.photos/59" class="pull-right">
                    <p>Judul hot3</p>
                    <a href="#">Jakarta</a>  
                    <br>   
                </div>
            </div>
            <div id="kontainer_moderator" class="kotak">
                <h4>Moderator</h4>
                <span class="kategori_mod">
                    <img src="https://picsum.photos/15" class="img-rounded">
                    Admin
                </span>
                <span class="kategori_mod">
                    <img src="https://picsum.photos/14" class="img-rounded">
                    Peter
                </span>
                <span class="kategori_mod">
                    <img src="https://picsum.photos/13" class="img-rounded">
                    Amaaank
                </span>
            </div>
        </div>
    </div>
@endsection