@extends('layouts.pageUser')
@section('judul_page',"Create Post | Kaskus")
@section('isi')
<?php 
	if($jenis_post=="reply"){
		$path = "createpost/".$id_thread."/".$id_post_balas;
		if(isset($kutip)){	
			if($kutip=="true"){
				$path.="/true";
			}
		}
	?>
	{{ Form::open(array('url' => $path)) }}
<?php 
	}
else{?>
	{{ Form::open(array('url' => 'createthread')) }}
<?php 
	}
	?>
{{-- <link   href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet"> --}}
<link   href="{{ asset ('css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link   href="{{ asset ('css/mystyle.css') }}" rel="stylesheet" type="text/css">
<link   href="{{ asset ('css/summernote-bs4.css') }}" rel="stylesheet">
{{-- <script src ="{{ asset ('js/jquery.js') }}"></script>
<script src ="{{ asset ('js/bootstrap.min.js') }}"></script> --}}
<script src ="{{ asset ('js/jquery.dataTables.min.js') }}"></script>	

{{-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>  --}}

<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel	="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

<div class="row" >
	<div class="col-md-12" style="margin-top:20px;">
		<div class="col-md-1"></div>
		<div class="col-md-7" style="margin-top:20px;background-color:white;border-radius:5px;padding:20px;">
			<div class="col-md-12" style="padding:2%">
				<div class="col-md-10">
					<div class="col-md-2" style="background-color:white"><?php 
						$path = App\foto_profil::where("id_profil_foto",Auth::user()->username)->get();
						if(sizeof($path)==0){
							 $foto = url("/storage\/")."default_profile_picture.png";
						}
						else{
							 $foto = url("/storage\/").$path[0]->source_foto;
						}
				 		?>
						<img src="{{$foto}}" style='margin-top:10px;width: 50px;height: 50px;border-radius :100px 100px;'>
					</div>
					<div class="col-md-8">
						<div class="col-md-12" style="margin-top:10px;">
							<font size="3" color="blue"><strong>{{Auth::user()->nama}}</strong></font>
							<input type="hidden" name="tuser" value="{{Auth::user()->username}}"> |
							<a style="color:gray"> {{date("l")}}, <?php $ldate = date('d/m/Y'); echo $ldate?> </a>
						</div>
						<div class="col-md-12">
							<a style="color:gray" > <?=Auth::user()->jabatan_user?></a> -
							<a style="color:gray"> Posts: {{Auth::user()->ctr_post}} </a> 
						</div>
					</div>
				</div>
				<div class="col-md-2">
				</div>
			</div>
			<div class="col-md-12" style="margin-top:10px;">
				<!-- Judul Post -->
				<div class="form-group row">
					<div class="col-md-12">
						<?php
							if($jenis_post=="thread"){
							?>
							
						<input id="judulpost" type="text" class="form-control" name="judulpost" value="" placeholder="Judul Post" autofocus>
							<?php 
							}
						?>
					</div>
				</div>
			</div>
			<div class="col-md-12" style="margin-top:10px;">
				<!-- TEXT AREA -->
				<div class="form-group row">
					<div class="col-md-12">
						<textarea id="summernote" type="text" class="form-control" name="isipost" value="{{''}}"></textarea>
					</div>
				</div>
			</div>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
			<script src ="{{ asset ('js/summernote-bs4.js') }}"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
			<script>$('#summernote').summernote();</script>
		</div>
		<div class="col-md-3" style="margin-top:20px;background-color:e9ebee">
			<div class="col-md-12" style="margin-top:10px; background-color:white;padding:20px;border-radius:5px;" >
				<span style="padding:2%"><strong>Pilih Kategori</strong></span>
				<div data-select2-id="5" style="margin-top:10px; width:100%">
					<div class="Mt(10px)" data-select2-id="4">
						<select name="forum_id" id="forum_id" class="btn btn-secondary dropdown-toggle form-control" style="border-color:gray;width:100%;margin-bottom:20px">
							<?php 
								foreach ($kategori as $row) {
									
									if($jenis_post=="thread"){
										if(isset($id_kat)){
											if($row->id_kategori==$id_kat){
												echo "<option value='$row->id_kategori'>$row->nama_kategori</option>";
												break;
											}
										}
										else{
										echo "<option value='$row->id_kategori'>$row->nama_kategori</option>";}}
									else{
										if($detail_thread[0]->id_kategori_thread==$row->id_kategori){
										echo "<option value='$row->id_kategori'>$row->nama_kategori</option>";
										break;}
									}
								}
							?>
						</select>
							<span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="1" style="width: 268px;">
							<span class="selection">
							<span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-forum_id-container">
							<span class="select2-selection__rendered" id="select2-forum_id-container" role="textbox" aria-readonly="true" title="Pilih Kategori">
							</span>
							<span class="select2-selection__arrow" role="presentation">
							<b role="presentation">
							</b>
							</span>
							</span>
							</span>
							<span class="dropdown-wrapper" aria-hidden="true">
							</span>
							</span>
							</div>
							<div id="captcha-newthread" style="">
							</div>
							<div class="Mt(10px) Bdt(borderSolidLightGrey)"><div class="D(f) Ai(c) Jc(c) Py(20px)">
						</select>
					</div>
					<div class="col-md-12" style="border-top: 1px solid black;padding-top:15px; margin-bottom:30px">
						<div class="col-md-12 mx-auto">
							{{Form::submit("Post",array("name"=>"btnpost", "class"=>"form-control btn-info"))}}	
						</div>
					</div> 
					
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>
{{ Form::close() }}
@endsection