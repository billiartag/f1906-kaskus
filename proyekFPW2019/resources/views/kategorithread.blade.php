@extends(Auth::check()?"layouts/pageUser":"layouts/page")
@section('judul_page',"KASKUS - Berbagi Hobi, Berkomunitas")
@section('isi')
    <?php 
        //detail
        $nama_kategori = $detail[0]->nama_kategori;
        $detail_kategori = $detail[0]->detail_kategori;
        $id_kategori = $id_kat;
    ?>
    <style>
    .kotak{
        background-color: white;
        padding: 15px;
        margin: 10px;
        border-radius: 5px;
        margin-bottom: 25px;
    }
    .kotak-border{
        border:1px solid black;
        
        background-color: white;
        padding: 10px;
        margin: 10px;
        border-radius: 5px;
    }
    a{
        color: black;   
    }
    a:hover{
        color: black;
        text-decoration: none;
    }
    </style>
    <div class="container">
        <div id="ctr_kiri" class="col-md-8">
            <div id="banner_kategori" class="kotak">
                <h4>Kategori: <b><?= $nama_kategori ?></b></h4>
                <h5>Deskripsi: <?= $detail_kategori ?></h5>
            </div>
            <div id="thread_kategori" class="kotak">
                {{-- //show every post here --}}
                <?php 
                    foreach ($threads as $row) {
                        //cari user yang sesuai
                        $user_sekarang = null;
                        foreach ($users as $r) {
                            if($r->username == $row->user_poster){
                                $user_sekarang = $r;
                            }
                        }
                        ?>
                            <div class="kotak-border" id="<?=$row->id_thread?>" name="<?=$row->id_thread?>" >
                                <span>
                                    <img src="" width="25px" height="25px">
                                    <?=$row->user_poster." - ".$user_sekarang->jabatan_user?>
                                </span>
                                <a href=""><h4><?=$row->judul_thread?></h4></a>
                                <span>
                                    Cendol: <?=$row->ctr_cendol?>
                                    Viewers: <?= $row->ctr_viewers?>
                                    Reply: <?= $row->ctr_reply?>
                                </span>

                            </div>
                        <?php
                    }
                    
                ?>
            </div>
        </div>
        <div class="col-md-1"></div>
        <div id="ctr_kanan" class="col-md-4">
            <div id="create_post" class="kotak">

            </div>
        </div>

    </div>
@endsection