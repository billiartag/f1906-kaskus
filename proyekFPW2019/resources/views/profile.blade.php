@extends('layouts.pageUser')
@section('judul_page',"Home | Kaskus")

@section('isi')
<style type='text/css'>
    #jumlah{
        font-size: 20px;
        color:aqua;
    }
    #gambarMejeng{
        margin : 5%;
        height:70px;
        width:70px;
        border-radius :100px 100px;
        border : 1px solid black;
    }
    #fotoProfil{
        width:200px;
        height:200px;
        left:0;
        bottom:0;
        position: absolute;
        margin-left : 6%;
        margin-bottom : 2%;
        border-radius :100px 100px;
    }
    #fotoProfil_kecil{
        width:30px;
        height:30px;
        margin: 1%;
        margin-left : -5%;
    }
    #background_profile{
        height:280px;
        padding:2%;
        margin-top:1.5%; 
        background-image:url('http://127.0.0.1:8000/storage/{{$src_background}}');
        background-size:100% 100%;
    }
    label{
        cursor : pointer;
    }
    #background_picture{
        opacity: 0;
        position: absolute;
        z-index: -1;
    }

    #penampung_konten_my_post{
        margin : 1% 2% 1% 2%;
        height : auto;
    }
    #konten_my_post{
        margin : 0;
        height : auto;
    }
    .reply_kutipan{
        display : none;
    }
    #pengirim{
        font-size:13pt;
        vertical-align: middle;
        margin-left:2%;
    }
    #waktu_kirim{
        font-style: italic;
        margin-top:6%;
        margin-left:-9%;
    }
    #kategori{
        font-size: 8pt;
        color : blue;
    }
    
</style>
<div class="row" >
    <div class="col-md-2"></div>
    <!-- isi konten -->
    <div class="col-md-8" > 
        <div class="row">
            <div class="col-md-12">
            <div class="col-md-12" style='background-color:white;'>
                <div class="col-md-12" id='background_profile'>
                    <div class="row" >
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-10">
                                </div>
                                <div class="col-md-2">
                                    <form id='ubah_background' action="/upload_background_picture" enctype="multipart/form-data" method='post'>
                                        @csrf
                                        <label for="background_picture" class='btn btn-warning'>ubah background</label>
                                        <input class='btn btn-sm btn-outline-primary' type="file" name='background_picture' id='background_picture'><br>
                                        <!-- <input type="submit" value='submit' class='btn btn-info'> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr style='font-weight:bold;'>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-4" style="margin-left:20px">
                            <h4>{{Auth::user()->nama}}</h4> <p style='font-style: italic;font-size: 13px;'>Kaskuser</p>
                            <p id='followerUser'></p>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-md btn-info disabled" style='margin:2%;width:100%;height:100%;padding:11%;'>Show QR Code</button>
                        </div>
                        <div class="col-md-2">
                            <form action="/edit">
                                <button class="btn btn-md btn-info" style='margin:2%;height:100%;width:100%;padding:11%;'>Edit profile</button>
                            </form>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <img src='http://127.0.0.1:8000/storage/{{$src_profil}}' id='fotoProfil' class="rounded-circle">
                <!-- <img src='{{Storage::url($src_profil)}}' id='fotoProfil' class="rounded-circle"> -->
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-5" style='height:auto;margin-top:3%;'>
                <!-- profil 1 -->
                <div class="col-md-12" style='background-color:white;'>
                    <div class="row">
                        <div class="col-md-12">
                            <br><br>
                            <hr>
                            <div class="row">
                                <div class="col-md-3 text-center btn" style='cursor:default;'>
                                    <p id="jumlah" style="color:black">{{$isi_post}}</p>
                                    <p>Posts</p>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3 text-center btn" data-toggle="modal" data-target="#myModalFollowers">
                                    
                                    <p id="jumlah" style="color:black">{{($count_following)}}</p>
                                    <p>Mengikuti</p>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3 text-center btn" data-toggle="modal" data-target="#myModalFollowings">
                                    <p id="jumlah" style="color:black">{{($count_followers)}}</p>
                                    <p>Pengikut</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- profil 2 -->
                <div class="col-md-12" style='background-color:white;margin-top:6%;'>
                    <h3>Agan juga memiliki</h3>
                    <hr>
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <p id="jumlah" style="color:black">{{$isi_thread}}</p>
                                <p>Thread</p>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-3 text-center">
                                <p id="jumlah" style="color:black">0</p>
                                <p>Video</p>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-3 text-center">
                                <p id="jumlah" style="color:black">0</p>
                                <p>Lapak</p>
                            </div>
                        </div>
                </div>
                <!-- profil 3 -->
                <div class="col-md-12" style='background-color:white;margin-top:6%;'>
                    <h3>Aktif Mejeng di </h3>
                    <hr>
                        @foreach($mejeng as $row_mejeng)
                            <div class="row" style='height:auto;'>
                                <div class="col-md-12 align-middle" style='height:50px;'>
                                    
                                    <a class='btn btn-default' style='width:100%;' href='{{ url("kategori/$row_mejeng") }}'> {{$kategori[$row_mejeng]}} </a>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
            <div class="col-md-7" style='height:auto; margin-top:3%;'>
                <div class="col-md-12 text-center" style='background-color:white;height:100%;'>
                <!-- isi threads -->
                    <h1>Aktivitas anda</h1>
                    <hr>
                    <div>
                        
                    <div class="row">
                        <div class="col-md-12" style='background-color:#e9ebee;height:8px;'></div>
                    </div>
                    @if($isi_post!=0||$isi_thread!=0)
                        @foreach($post as $row)
                            @if($row['reply_post']==0)
                                <div class="row" id='penampung_konten_my_post'>
                                    <div class="col-md-12" id='konten_my_post'>
                                        @foreach($thread as $rowthread)
                                            @if($rowthread['id_thread']==$row['id_sumber'])
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <img src='http://127.0.0.1:8000/storage/{{$src_profil}}' id='fotoProfil_kecil' class="rounded-circle pull-left">
                                                        <p id='pengirim' class='pull-left'>{{Auth::user()->nama}} </p>
                                                        <p id='waktu_kirim' class='small pull-left'>{{ $row['waktu_post'] }}</p>
                                                        
                                                    </div>
                                                    <div class="col-md-2">
                                                        <span id='kategori'>{{ $kategori[$rowthread['id_kategori_thread']] }}</span>
                                                    </div>
                                                </div>

                                                <hr>
                                                <h3><?=$rowthread['judul_thread']?></h3>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p><?=$row['isi_post']?></p>
                                                    </div>
                                                </div>
                                                
                                                <hr>

                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @else
                                <div class="row" id='penampung_konten_my_post'>
                                    <div class="col-md-12" id='konten_my_post'>
                                        <div class="row">   
                                                    <div class="col-md-10">
                                                        <img src='http://127.0.0.1:8000/storage/{{$src_profil}}' id='fotoProfil_kecil' class="rounded-circle pull-left">
                                                        <p id='pengirim' class='pull-left'>{{Auth::user()->nama}} </p>
                                                        <p id='waktu_kirim' class='small pull-left'>{{ $row['waktu_post'] }}</p>
                                                        
                                                    </div>
                                                    <div class="col-md-2">
                                                        <a id='kategori' href='{{ url("kategori/$row[id_kategori_post]") }}'>{{ $kategori[$row['id_kategori_post']] }}</a>
                                                    </div>
                                                </div>
                                                <?php
                                                    $thread_search = DB::table('thread_posts')->where('id_thread','=',$row['id_sumber'])->get();
                                                ?>
                                                <hr>
                                                <span class='badge pull-left'>
                                                    <!-- <i class="material-icons md-18">reply</i>         -->
                                                    <span style='font-style:italic;'>Membalas Thread {{ $thread_search[0]->user_poster }}</span>
                                                </span><br><br>
                                                <?=$row['isi_post']?>
                                            
                                        <hr>
                                    </div>
                                </div>
                            @endif
                                <div class="row">
                                    <div class="col-md-12" style='background-color:#e9ebee;height:8px;'></div>
                                </div>
                        @endforeach
                    @endif
                    </div>
                </div>
                @if($isi_post!=0||$isi_thread!=0)
                    <ul class="pagination">
                        @for($i=0;$i<($isi_post+$isi_thread)/3;$i++)
                            <li><a href="{{url('/profile/'.$i)}}">{{$i+1}}</a></li>
                        @endfor
                    </ul>
                @endif
            </div>

        </div>
        
    </div>
    <div class="col-md-2"></div>
</div>



        <!-- The Modal for Followings  -->
        <div class="modal" id="myModalFollowings">
            <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">User yang Mengikuti anda</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            @if($count_followers!=0)
                                @foreach($followers as $row)
                                    <?php
                                        $nama = DB::table('users')->where('username','=',$row->id_user)->get();
                                        
                                    ?>

                                    <!-- get profile picture -->
                                    <?php 
                                        $eloq = App\foto_profil::where("id_profil_foto",$row->id_user);
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
                                    <img src="<?=$foto?>" id="gambar_poster" class="pull-left img-circle" style='width:15px;height:15px'>



                                    @foreach($nama as $row_nama)
                                        {{ $row_nama->nama }}
                                        <hr>
                                    @endforeach
                                @endforeach
                            @endif
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
        
        <!-- The Modal for Followings -->
        <div class="modal" id="myModalFollowers">
            <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">User yang anda ikuti</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            @if($count_following!=0)
                                @foreach($following as $row)
                                        <div class="row btn" style='width:100%;'>
                                    <?php
                                        $nama = DB::table('users')->where('username','=',$row->id_following)->get();
                                        
                                    ?>

                                    <!-- get profile picture -->
                                    <?php 
                                        $eloq = App\foto_profil::where("id_profil_foto",$row->id_following);
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
                                    <img src="<?=$foto?>" id="gambar_poster" class="pull-left img-circle" style='width:15px;height:15px'>

                                    @foreach($nama as $row_nama)
                                    
                                        {{ $row_nama->nama }}
                                        
                                    @endforeach
                                    </div>
                                    <br>
                                @endforeach
                            @endif
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


<script>
    document.getElementById("background_picture").onchange = function(){
        document.getElementById("ubah_background").submit();
    }
</script>
@endsection