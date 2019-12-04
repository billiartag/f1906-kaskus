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
    #konten_my_post{
        margin : 5%;
    }
    .reply_kutipan{
        display : none;
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
                                <div class="col-md-3 text-center">
                                    <p id="jumlah" style="color:black">{{$isi_post}}</p>
                                    <p>Posts</p>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3 text-center">
                                    <p id="jumlah" style="color:black">0</p>
                                    <p>Mengikuti</p>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3 text-center">
                                    <p id="jumlah" style="color:black">0</p>
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
                        <div class="row" style='height:auto;'>
                            <div class="col-md-3" style='height:auto;'>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/c/c4/Surabaya_Montage_2.jpg" class="rounded-circle" id='gambarMejeng'>
                                </div>
                            <div class="col-md-9 align-middle" style='height:50px;'>
                                <h4>Surabaya</h4>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-md-7" style='height:500px;margin-top:3%;'>
                <div class="col-md-12 text-center" style='background-color:white;height:100%;'>
                <!-- isi threads -->
                    <h1>Aktivitas anda</h1>
                    <hr>
                    <div>
                    @if($isi_post!=0||$isi_thread!=0)
                        @foreach($post as $row)
                            @if($row['reply_post']==0)
                                <div class="row" id='konten_my_post'>
                                    <div class="col-md-12" style='border:1px solid black;'>
                                        @foreach($thread as $rowthread)
                                            @if($rowthread['id_thread']==$row['id_sumber'])
                                                <h3><?=$rowthread['judul_thread']?></h3>
                                                <hr>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @else
                                 <div class="row" id='konten_my_post'>
                                    <div class="col-md-12" style='border:1px solid black;'>
                                        <?=$row['isi_post']?>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                    </div>
                </div>
                @if($isi_post!=0||$isi_thread!=0)
                    <ul class="pagination">
                        @for($i=0;$i<($isi_post+$isi_thread)/5;$i++)
                            <li><a href="{{url('/profile/'.$i)}}">{{$i+1}}</a></li>
                        @endfor
                    </ul>
                @endif
            </div>

        </div>
        
    </div>
    <div class="col-md-2"></div>
</div>
<script>
    document.getElementById("background_picture").onchange = function(){
        document.getElementById("ubah_background").submit();
    }
</script>
@endsection