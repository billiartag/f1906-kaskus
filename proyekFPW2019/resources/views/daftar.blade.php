
@extends('layouts.page')
@section('judul_page',"Daftar | Kaskus")
@section('isi')
{{ Form::open(array('url' => 'daftar')) }}
{{-- <div class="row">
	<div class="col-md-12">
		<div class="modal" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				<p>Modal body text goes here.</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-primary">Save changes</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
	</div>
</div> --}}
<style>
.kotak{
	background-color: white;
	padding:20px;
	border-radius: 3px;
}
</style>
<div id="container" class="container">
	<div class="col-md-3"></div>
	<div class="col-md-6 kotak">
		<p>
		<h2>Daftar</h2>
		@if($error !== null)
		<p class="text-danger">{{$error}}</p>	
		@endif
		</p>
			{{Form::label("u","Username")}}<br>
			{{Form::text("username","",array("class"=>"form-control"))}}<br>
			{{Form::label("p","Password")}}<br>
			{{Form::password("password",array("class"=>"form-control"))}}<br>
			{{Form::label("labelemail","Email")}}<br>
			{{Form::text("email","",array("class"=>"form-control"))}}<br>
			{{Form::submit("Daftar",array("name"=>"btndaftar", "class"=>"form-control btn-primary"))}}
	</div>
	<div class="col-md-3"><div>
</div>
{{ Form::close() }}
@endsection