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
    }
</style>
<div class="row" >
    <div class="col-md-2"></div>
    <!-- isi konten -->
    <div class="col-md-8" > 
        <div class="row">
            <div class="col-md-12" style='border:1px solid black;'>
                <div class="col-md-12" style="height:280px;padding:2%;margin-top:1.5%; background-color:black">
                    <div class="row" >
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-10">
                                </div>
                                <div class="col-md-2">
                                    <button class='btn btn-sm btn-outline-primary'>Ubah Background</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr style='font-weight:bold;'>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-1" style="margin-left:20px">
                            <h4>User</h4> Kaskuser
                            <p id='followerUser'></p>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-5">
                            <button class="btn btn-md btn-outline-primary" style='margin:2%;margin-left:30px'>Show QR Code</button>
                            <button class="btn btn-md btn-outline-primary" style='margin:2%;margin-left:40px'>Edit profile</button>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <img src='https://upload.wikimedia.org/wikipedia/commons/c/c4/Surabaya_Montage_2.jpg' id='fotoProfil' class="rounded-circle">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5" style='height:auto;margin-top:3%;'>
                <!-- profil 1 -->
                <div class="col-md-12" style='border:1px solid black;'>
                    <div class="row">
                        <div class="col-md-12">
                            <br><br>
                            <hr>
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <p id="jumlah">10</p>
                                    <p>Posts</p>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3 text-center">
                                    <p id="jumlah">10</p>
                                    <p>Mengikuti</p>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3 text-center">
                                    <p id="jumlah">10</p>
                                    <p>Pengikut</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- profil 2 -->
                <div class="col-md-12" style='border:1px solid black;margin-top:6%;'>
                    <h3>Agan juga memiliki</h3>
                    <hr>
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <p id="jumlah">10</p>
                                <p>Thread</p>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-3 text-center">
                                <p id="jumlah">10</p>
                                <p>Video</p>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-3 text-center">
                                <p id="jumlah">10</p>
                                <p>Lapak</p>
                            </div>
                        </div>
                </div>
                <!-- profil 3 -->
                <div class="col-md-12" style='border:1px solid black;margin-top:6%;'>
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
                <div class="col-md-12" style='background-color:black;height:100%;'>
                    
                </div>
                <!-- isi threads -->
            </div>

        </div>
        
    </div>
    <div class="col-md-2"></div>
</div>
@endsection