@extends('layouts.pageUser')
@section('judul_page',"Create Post | Kaskus")
@section('isi')
{{ Form::open(array('url' => 'createpost')) }}
<link   href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet">
<link   href="{{ asset ('css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link   href="{{ asset ('css/mystyle.css') }}" rel="stylesheet" type="text/css">
<link   href="{{ asset ('css/summernote-bs4.css') }}" rel="stylesheet">
<script src ="{{ asset ('js/jquery.js') }}"></script>
<script src ="{{ asset ('js/bootstrap.min.js') }}"></script>
<script src ="{{ asset ('js/jquery.dataTables.min.js') }}"></script>	

<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

	<div class="container">
		<div style="width:40%;height:75%;position:absolute;margin-left:5%;background-color:white">
			<div class="container mt-3">
			  <div class="media border p-3">
				<img src="{{ URL::to('/minecraft.jpg') }}" class="mr-3 mt-3 rounded-circle" style="width:60px;height:60px;border-radius :100px 100px;">
				<div class="media-body">
				
				
				<h4>{{Auth::user()->nama}}</h4><i>Hari ini, <?php 
				$ldate = date('H:i');
				echo $ldate?></i></small></h4>
				</div></br>
			  </div>
			</div>
			<!-- Judul Post -->
			<div class="form-group row">
				<div class="col-md-12">
					<input id="judulpost" type="text" class="form-control" name="judulpost" value="" placeholder="Judul Post" autofocus>
				</div>
			</div>
			
			<!-- TEXT AREA -->
			<div class="form-group row">
				<div class="col-md-12">
					<textarea id="summernote" type="text" class="form-control" name="isipost" value="{{''}}"></textarea>
				</div>
			</div>

			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
			<script src ="{{ asset ('js/summernote-bs4.js') }}"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
			<script>
				$('#summernote').summernote();
			</script>
		</div>

		<!-- PILIH KATEGORI -->
		<div style="width:20%;height:75%;position:absolute;margin-top:-1%;margin-left:50%;">
			<a href="#"><span class="btn btn-info"><img src="https://s.kaskus.id/assets/web_1.0/images/ic-jualbeli.svg"> Mau Bikin Lapak? Klik dimari Gan!</span></a>
			<div style="background-color:white;height:50px;width:90%;margin-top:20px;margin-bottom:20px">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Draft (0) <span class="caret"></span></a>
			</div>
			<div><div><div style="margin-bottom:6px"><span>Pilih Kategori</span></div><div data-select2-id="5"><div class="Mt(10px)" data-select2-id="4"><select name="forum_id" id="forum_id" class="btn btn-secondary dropdown-toggle" style="width:90%;margin-bottom:20px">
			{{Form::submit("POST",array("name"=>"btnpost", "class"=>"form-control btn-danger"))}}	
				</select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="1" style="width: 268px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-forum_id-container"><span class="select2-selection__rendered" id="select2-forum_id-container" role="textbox" aria-readonly="true" title="Pilih Kategori"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div><div id="captcha-newthread" style=""></div><div class="Mt(10px) Bdt(borderSolidLightGrey)"><div class="D(f) Ai(c) Jc(c) Py(20px)"></div></div></div></div></div>
		</div>
	</form>
  </div>
  {{ Form::close() }}
@endsection