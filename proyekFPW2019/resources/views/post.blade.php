
@extends('layouts.page')
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
        width: 60%
    }
    #reply-box{
        background-color: #484848
    }
    #poster_thread{
        size: 5pt
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
    <div id="kontainer-besar" class="row">
        <div class="col-2"></div>
        <div id="kontainer_kiri" class="col-5">            
            <div name="kontainer-thread" class="kotak mx-auto">
                <div id="poster_thread" class="small d-inline">
                    <p>
                        <img src="https://i.pravatar.cc/50" id="gambar_poster" class="float-left rounded-circle">
                        <span class="float-right">
                            <span id="report_thread"><a href="#"><i class="material-icons">menu</i></a></span>
                        </span>
                        <span>
                            <span id="nama_poster" class="nama"><a href="#">Nama poster</a></span>
                            <span id="waktu_post">2019/20/20</span>
                        </span>
                        <br>
                        <span>
                            <span id="poster_rank">Kaskuser Nuub</span>•
                            <span id="poster_jumlah">Posts: <a href="#">420</a></span>•
                            <span id="poster_karma">2000</span>
                        </span>
                    </p>
                </div>
                <hr>
                <div name="judul_thread">
                    <p><h4>Ini Judul Thread!</h4></p>
                </div>
                <hr>
                <div name="isi_thread">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Stuprata per vim Lucretia a regis filio testata civis se ipsa interemit. At, illa, ut vobis placet, partem quandam tuetur, reliquam deserit. In quibus doctissimi illi veteres inesse quiddam caeleste et divinum putaverunt. Itaque hoc frequenter dici solet a vobis, non intellegere nos, quam dicat Epicurus voluptatem. Hoc ille tuus non vult omnibusque ex rebus voluptatem quasi mercedem exigit. Alia quaedam dicent, credo, magna antiquorum esse peccata, quae ille veri investigandi cupidus nullo modo ferre potuerit. Duo Reges: constructio interrete. Non est ista, inquam, Piso, magna dissensio. In contemplatione et cognitione posita rerum, quae quia deorum erat vitae simillima, sapiente visa est dignissima. </p>
    
                    <p>Ad corpus diceres pertinere-, sed ea, quae dixi, ad corpusne refers? Quo modo autem optimum, si bonum praeterea nullum est? Hoc non est positum in nostra actione. Si stante, hoc natura videlicet vult, salvam esse se, quod concedimus; Ait enim se, si uratur, Quam hoc suave! dicturum. Huic mori optimum esse propter desperationem sapientiae, illi propter spem vivere. Satis est tibi in te, satis in legibus, satis in mediocribus amicitiis praesidii. Habes, inquam, Cato, formam eorum, de quibus loquor, philosophorum. </p>
                    <p class="text-center"><img src="https://picsum.photos/400/150" class="img-thumbnail rounded mx-auto"></p>
                    <p>Prioris generis est docilitas, memoria; Sed plane dicit quod intellegit. Collige omnia, quae soletis: Praesidium amicorum. Qui enim voluptatem ipsam contemnunt, iis licet dicere se acupenserem maenae non anteponere. Scientiam pollicentur, quam non erat mirum sapientiae cupido patria esse cariorem. Sed haec quidem liberius ab eo dicuntur et saepius. </p>
                    
                    <p>Et quidem, inquit, vehementer errat; Quia dolori non voluptas contraria est, sed doloris privatio. Age nunc isti doceant, vel tu potius quis enim ista melius? Quo modo autem optimum, si bonum praeterea nullum est? Omnes enim iucundum motum, quo sensus hilaretur. Potius inflammat, ut coercendi magis quam dedocendi esse videantur. </p>
                    
                    <p>Etiam beatissimum? Qui convenit? Quid dubitas igitur mutare principia naturae? Quae enim adhuc protulisti, popularia sunt, ego autem a te elegantiora desidero. Quid igitur dubitamus in tota eius natura quaerere quid sit effectum? Aliter autem vobis placet. Tu vero, inquam, ducas licet, si sequetur; Gerendus est mos, modo recte sentiat. An tu me de L. Quamquam id quidem, infinitum est in hac urbe; </p>
                    
                </div>
                <div class="post_liker">
                    <span>
                        <img src="https://i.pravatar.cc/20" class="rounded-circle">
                        <img src="https://i.pravatar.cc/21" class="rounded-circle">
                        <img src="https://i.pravatar.cc/19" class="rounded-circle">
                        <span>Liked this</span>
                    </span>
                </div>
                <hr>
                <div class="post_footer">
                        <div class="interact float-right">
                            <a href="">Kutip</a>
                            <a href="">Balas</a>
                        </div>
                    <div class="karma">
                        <span>                                
                            <a href="#"><i class="material-icons text-success">arrow_upward</i></a>
                            50
                            <a href="#"><i class="material-icons text-danger">arrow_downward</i></a>
                        </span>
                    </div>
                </div>
            </div>
            <div id="reply_box" class="kotak mx-auto p-3">
                <span>Reply</span><br>
                <textarea class="w-100 form-control"></textarea>
                <input type="button" value="Post" class="btn btn-primary">
            </div>
            <div name="kontainer-reply" class="kotak mx-auto">
                <div id="post1" class="">
                    <div id="poster_reply" class="small d-inline">
                        <p>
                            <img src="https://i.pravatar.cc/49" id="gambar_poster" class="float-left rounded-circle">
                            <span class="float-right">
                                <span id="nomor_reply"><a href="#">#1</a></span>
                                <span id="report_reply"><a href="#" class="float-right"><i class="material-icons">menu</i></a></span>
                            </span>
                            <span>
                                <span id="nama_reply" class="nama"><a href="#">Nama poster</a></span>
                                <span id="waktu_reply">2019/20/20</span>
                            </span>
                            <br>
                            <span>
                                <span id="reply_rank">Kaskuser Mod</span>•
                                <span id="reply_jumlah">Posts: <a href="#">9999</a></span>•
                                <span id="reply_karma">99999</span>
                            </span>
                        </p>
                    </div>
                    <hr>
                    <div class="isi_reply">
                        <p>anjaiiii</p>
                    </div>
                    <div class="post_liker">
                        <span>
                            <img src="https://i.pravatar.cc/22" class="rounded-circle">
                            <span>Liked this</span>
                        </span>
                    </div>
                    <hr>
                    <div class="post_footer">
                            <div class="interact float-right">
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
            </div>
        </div>
        <div id="kontainer_kanan" class="col-3">
            <div id="kontainer_kategori" class="kotak">
                <span>
                    <i class="material-icons float-left">emoji_food_beverage</i>
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
                    <i class="material-icons float-left">thumb_up</i>
                    <h4>Thread Rekomendasi</h4>
                </span>
                <div class="post_rekomen">
                    <img src="https://picsum.photos/60" class="float-right">
                    <p>Judul rekomendasi</p>
                    <a href="#">The Lounge</a>  
                    <br>   
                </div><hr>
                <div class="post_rekomen">
                    <img src="https://picsum.photos/61" class="float-right">
                    <p>Judul rekomendasi</p>
                    <a href="#">Komputer</a>  
                    <br>   
                </div><hr>
                <div class="post_rekomen">
                    <img src="https://picsum.photos/59" class="float-right">
                    <p>Judul rekomendasi</p>
                    <a href="#">The Lounge</a>  
                    <br>   
                </div>
            </div>
            <div id="kontainer_hot" class="kotak">
                <span>
                    <i class="material-icons float-left">fireplace</i>
                    <h4>Thread Hot!</h4>
                </span>
                <div class="post_hot">
                    <img src="https://picsum.photos/60" class="float-right">
                    <p>Judul hot1</p>
                    <a href="#">The Lounge</a>  
                    <br>   
                </div><hr>
                <div class="post_hot">
                    <img src="https://picsum.photos/61" class="float-right">
                    <p>Judul hot2</p>
                    <a href="#">Surabaya</a>  
                    <br>   
                </div><hr>
                <div class="post_hot">
                    <img src="https://picsum.photos/59" class="float-right">
                    <p>Judul hot3</p>
                    <a href="#">Jakarta</a>  
                    <br>   
                </div>
            </div>
            <div id="kontainer_moderator" class="kotak">
                <h4>Moderator</h4>
                <span class="kategori_mod">
                    <img src="https://picsum.photos/15" class="rounded-circle">
                    Admin
                </span>
                <span class="kategori_mod">
                    <img src="https://picsum.photos/14" class="rounded-circle">
                    Peter
                </span>
                <span class="kategori_mod">
                    <img src="https://picsum.photos/13" class="rounded-circle">
                    Amaaank
                </span>
            </div>
        </div>
        
        <div class="col-2"></div>
    </div>
@endsection