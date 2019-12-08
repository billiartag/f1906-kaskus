@extends(Auth::check()?"layouts/pageUser":"layouts/page")
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
        padding:2% 1%;
        border: 1px solid black;
        border-radius: 5px;
        margin:1%; 
    }
    .per_reply{
        border: 1px solid gray;
        border-radius: 5px;
        padding: 2%;
        padding-bottom: 3%;
        margin:1%;
        margin-top:2%;
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
    .pp{
        width: 30px;
        height: 30px;
    }
    .pp_besar{
        width: 50px;
        height: 50px;
    }
    .sidepost{
        margin:10px;
        padding:5px;
    }
    #konten_model_post{
        margin: 2%;
    }
</style>
    <div id="kontainer-besar" class="container">
        <div class="col-md-1"></div>
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
                        <?php 
                            $eloq = App\foto_profil::where("id_profil_foto",$user_poster->username);
                            if($eloq->count()>0)
                            {
                                $arr=$eloq->get();
                                $foto = url("/storage\/").$arr[0]->source_foto;
                                if($arr[0]->source_foto==""){
                                    $foto = url("/storage\/")."default_profile_picture.png";
                                }
                            }
                            else{
                                $foto = url("/storage\/")."default_profile_picture.png";
                            }
                        ?>
                        <img src="<?=$foto?>" id="gambar_poster" class="pull-left img-circle pp_besar">
                        <span class="pull-right">
                            {{-- <span id="report_thread"><a href="#"><i class="material-icons">menu</i></a></span> --}}
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
                <hr>
                <div class="post_footer">
                    <div class="karma">
                        <span>   
                            <?php 
                                $dicendol=false;
                                $dibata=false;
                                $cendols = explode(",",$posts[0]->ctr_cendol);
                                $batas = explode(",",$posts[0]->ctr_bata);
                                $ctr_c = ($cendols[0]=="")?0:sizeof($cendols);
                                $ctr_b = ($batas[0]=="")?0:sizeof($batas);
                                $login = false;
                                if(Auth::check()){
                                    for ($j=0; $j < sizeof($cendols) ; $j++) { 
                                        if($cendols[$j]==Auth::user()->username){
                                            $dicendol=true;
                                            break;
                                        }
                                    }
                                    for ($j=0; $j < sizeof($batas) ; $j++) { 
                                        if($batas[$j]==Auth::user()->username){
                                            $dibata=true;
                                            break;
                                        }
                                    }
                                    $login=true;
                                }
                            ?>                                                      
                            <a href="<?php if($login){ if(!$dibata){echo url("/vote\/").$posts[0]->id_post."/cendol/".Auth::user()->username;}}?>"><i class="material-icons text-success" <?php if($dicendol){echo "style='background-color:#c6f68d;border-radius:4px'";}?>>arrow_upward</i></a>
                            <?php echo ($ctr_c-$ctr_b)?>
                            <a href="<?php if($login){if(!$dicendol){echo url("/vote\/").$posts[0]->id_post."/bata/".Auth::user()->username;}}?>"  ><i class="material-icons text-danger" <?php if($dibata){echo "style='background-color:#EF5350;border-radius:4px'";}?>>arrow_downward</i></a>
                        </span>
                    </div>
                    <div class="row" style="padding:2%">
                        <a href='<?=url("/createpost\/").$isi_thread[0]->id_thread."/".$posts[0]->id_post."/true"?>' style="margin-right:1%" class="btn btn-info">Kutip</a>
                        <a href='<?=url("/createpost\/").$isi_thread[0]->id_thread."/".$posts[0]->id_post?>' class='btn btn-primary'>Balas</a>
                        </div>                    
                </div>
            </div>
            <div name="kontainer-reply" class="kotak mx-auto">
                
            <?php 
            for ($i=1; $i < sizeof($posts); $i++) {      
                //get poster detail
                $user_reply  = null;
                foreach ($users as $row_user) {
                    if($row_user->username==$posts[$i]->user_poster){
                        if(!isset($id_post)){
                        $user_reply = $row_user;}
                        else{
                            if($posts[$i]->id_post==$id_post){
                                $user_reply = $row_user;
                            }
                        }
                    }
                }if($user_reply!=null){    
                ?>



                <div class="per_reply">
                    <div id="poster_reply" class="small d-inline">
                        <p>
                            <?php 
                                $path = App\foto_profil::where("id_profil_foto",$user_reply->username)->get();
                                if(sizeof($path)==0){
                                    $foto = url("/storage\/")."default_profile_picture.png";
                                }
                                else{
                                    $foto = url("/storage\/").$path[0]->source_foto;
                                }
                            ?>
                            <img src="<?=$foto?>" id="gambar_poster" class="pull-left img-circle pp">
                            <span class="pull-right">
                                <span id="nomor_reply"><a href="<?=url("/post")."/".$posts[$i]->id_sumber."/".$posts[$i]->id_post?>">#<?=$posts[$i]->id_post?></a></span>
                                {{-- <span id="report_reply"><a href="#" class="pull-right"><i class="material-icons">menu</i></a></span> --}}
                            </span>
                            <span>
                                <span id="nama_reply" class="nama"><a href="#" data-toggle="modal" data-target="#<?=$posts[$i]->user_poster?>_modal"><?=$posts[$i]->user_poster?></a></span>
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
                    {{-- <div class="post_liker">
                        <span>
                            <img src="https://i.pravatar.cc/22" class="img-circle">
                            <span>Liked this</span>
                        </span>
                    </div> --}}
                    <hr>
                    <div class="post_footer">
                        <div class="interact pull-right">
                            <a href="<?=url("/createpost\/").$posts[$i]->id_sumber."/".$posts[$i]->id_post?>/true" class='btn btn-info' style='margin-right:5px'>Kutip</a>
                            <a href="<?=url("/createpost\/").$posts[$i]->id_sumber."/".$posts[$i]->id_post?>" class='btn btn-primary' style='margin-right:5px'>Balas</a>
                        </div>
                        <div class="karma">
                            <span>              
                                <?php 
                                    $cendols = explode(",",$posts[$i]->ctr_cendol);
                                    $batas = explode(",",$posts[$i]->ctr_bata);
                                    $ctr_c = ($cendols[0]=="")?0:sizeof($cendols);
                                    $ctr_b = ($batas[0]=="")?0:sizeof($batas);
                                    
                                    $dicendol=false;
                                    $dibata=false;
                                    $login-false;

                                    if(Auth::check()){
                                        for ($j=0; $j< sizeof($cendols) ; $j++) { 
                                            if($cendols[$j]==Auth::user()->username){
                                                $dicendol=true;
                                                break;
                                            }
                                        }
                                        $batas = explode(",",$posts[$i]->ctr_bata);
                                        for ($j=0; $j < sizeof($batas) ; $j++) { 
                                            if($batas[$j]==Auth::user()->username){
                                                $dibata=true;
                                                break;
                                            }
                                        }
                                        $login=true;
                                    }
                                ?>                                                            
                                <a href="<?php if($login){ if(!$dibata){echo url("/vote\/").$posts[$i]->id_post."/cendol/".Auth::user()->username;}}?>"><i class="material-icons text-success" <?php if($dicendol){echo "style='background-color:#c6f68d;border-radius:4px'";}?>>arrow_upward</i></a>
                                <?php echo ($ctr_c-$ctr_b)?>
                                <a href="<?php if($login){if(!$dicendol){echo url("/vote\/").$posts[$i]->id_post."/bata/".Auth::user()->username;}}?>"  ><i class="material-icons text-danger" <?php if($dibata){echo "style='background-color:#EF5350;border-radius:4px'";}?>>arrow_downward</i></a>
                                
                            </span>
                        </div>
                    </div>
                    </div>


                
                <!-- Buat Modal untuk profil -->
                <div class="modal" id="<?=$posts[$i]->user_poster?>_modal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                            <img src="<?=$foto?>" id="gambar_poster" style='width:150px;height:150px;' class="pull-center img-circle">
                            
                            <span><h2 class="modal-title"><?=$posts[$i]->user_poster?>
                            @auth
                                @if($posts[$i]->user_poster != Auth::user()->username)
                                    <?php if(DB::table('follows')->where("id_user",'=',Auth::user()->username)->where('id_following','=',$posts[$i]->user_poster)->count()==0){ ?>
                                        <span>
                                            <button class='btn btn-sm btn-default' onclick='follow("{{ Auth::user()->username }}","{{ $posts[$i]->user_poster }}")'>
                                                <i class="material-icons">person_add</i>
                                            </button>
                                        </span>
                                    <?php }else{ ?> 
                                        <span>
                                            <i class="material-icons" style='color:green;'>check</i>
                                        </span>
                                    <?php } ?>
                                @endif
                            @endauth
                            </h2></span>
                            </center>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="row" style='height:350px;'>
                                <div class="col-md-1"></div>
                                <div class="col-md-10 bg-primary" style='height:350px;overflow:auto;'>
                                    <?php $post_user_clicked = DB::table('posts')->where('user_poster','=',$posts[$i]->user_poster)->get();  ?>
                                    @foreach($post_user_clicked as $row_modal)
                                        <div class='row' style='margin:2%;border:1px solid black;background-color:white;color:black;'>
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10">
                                                <div id="konten_model_post">
                                                    <p class='pull-right small'>{{ $row_modal->waktu_post }}</p>
                                                    <?php  
                                                        $thread_search_model = DB::table('thread_posts')->where('id_thread','=',$row_modal->id_sumber)->get();
                                                    ?> 
                                                    @if($row_modal->reply_post == 0)
                                                        <p style='font-weight:bold;'>{{ $thread_search_model[0]->judul_thread }}</p>
                                                            

                                                    @else
                                                        <span class='badge'>
                                                            <i class="material-icons md-18">reply</i>        
                                                            <span>Membalas Thread {{ $thread_search_model[0]->user_poster }}</span>
                                                        </span>
                                                            
                                                          
                                                        <p><?= $row_modal->isi_post ?></p>
                                                        
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                    @endforeach 
                                </div>
                                <div class="col-md-1"></div>
                                
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
                        </div>
                        </div>
                    </div>
                </div>

                <!-- Modal end -->


                <?php 
                }
            }
            ?>
            </div>
        </div>
        <div id="kontainer_kanan" class="col-md-3">
            <div id="kontainer_kategori" class="kotak">
                <span>
                    <?php 
                        $isi_kategori= DB::select("SELECT * FROM KATEGORIS");
                        // echo $posts[0]->id_kategori_post;
                        foreach ($isi_kategori as $row) {
                            if($row->id_kategori==$posts[0]->id_kategori_post){
                                ?>
                                    <i class="material-icons pull-left">emoji_food_beverage</i>
                                    <h4><?=$row->nama_kategori?></h4>
                                    </span>
                                    <p>
                                        <?=$row->detail_kategori?>
                                    </p>
                                <?php
                                break;
                            }
                        }    
                    ?>
                <input type="button" class="btn btn-warning" value="Subscribe">
                <br><br>
                <a class="btn btn-primary form-control" href="<?=url('/createthread\/').$posts[0]->id_kategori_post?>">Buat Thread Sekarang</a>
            </div>
            <div id="kontainer_rekomendasi" class="kotak">
                <span>
                    <i class="material-icons pull-left">thumb_up</i>
                    <h4>Thread Rekomendasi</h4>
                </span>
                <?php 
                    foreach ($hot as $row) {
                        # code...
                        ?>
                        <div class="post_rekomen sidepost">
                            <a href="<?=url("post/$row->id_thread")?>"><h4><?=$row->judul?></h4></a>
                            <a href="<?=url("/kategori/$row->id")?>"><?=$row->nama?></a>  
                            <br>   
                        </div>
                        <hr>
                        <?php
                    }
                
                ?>
            </div>
            <div id="kontainer_hot" class="kotak">
                <span>
                    <i class="material-icons pull-left">whatshot</i>
                    <h4>Thread Hot!</h4>
                </span>
                <?php 
                    foreach ($rekom as $row) {
                        ?>
                        <div class="post_hot sidepost">
                                <a href="<?=url("post/$row->id_thread")?>"><h4><?=$row->judul?></h4></a>
                                <a href="<?=url("/kategori/$row->id")?>"><?=$row->nama?></a>  
                                <br>   
                        </div>
                        <hr>

                        <?php
                    }
                
                ?>
            </div>
        </div>
    </div>

    <script type='text/javascript'>
        function follow(user,user_following){
            // //buat @csrf
            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     }
            // });
            $.ajax({
                "url" : "<?=url('/follow')?>",
                "method" : "post",
                "data" : {
                    "_token" : "{{ csrf_token() }}",
                    "user" : user,
                    "user_following" : user_following,
                },
                success : function(a){
                    window.location.reload();
                }
            });
        }
    </script>
    

@endsection