@extends(Auth::check()?"layouts/pageUser":"layouts/page")
@section('judul_page',"KASKUS - Berbagi Hobi, Berkomunitas")
@section('isi')
    <?php 
        print_r($threads);
        //detail
        $nama_kategori = $detail[0]->nama_kategori;
        $detail_kategori = $detail[0]->detail_kategori;
        $id_kategori = $id_kat;
        print_r($users);
    ?>
    <style>
    .kotak{
        background-color: white;
        padding: 15px;
        margin: 10px;
        border-radius: 5px;
        margin-bottom: 25px;
    }
    </style>
    <div class="container">
        <div id="ctr_kiri" class="col-md-8">
            <div id="banner_kategori" class="kotak">
                <h4><?= $nama_kategori ?></h4>
                <h5><?= $detail_kategori ?></h5>
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
                            <div class="kotak" id="<?=$row->id_thread?>" name="<?=$row->id_thread?>" >
                                <span>
                                    <img src="" width="25px" height="25px">
                                    <?=$row->user_poster." - ".$user_sekarang->jabatan_user?>
                                </span>
                                <h4><?=$row->judul_thread?></h4>

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