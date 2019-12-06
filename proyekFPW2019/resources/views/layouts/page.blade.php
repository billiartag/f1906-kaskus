<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('judul_page')</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link   href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet">
	<link   href="{{ asset ('css/jquery.dataTables.min.css') }}" rel="stylesheet">
	<link   href="{{ asset ('css/mystyle.css') }}" rel="stylesheet" type="text/css">

	<script src ="{{ asset ('js/jquery.js') }}"></script>
	<script src ="{{ asset ('js/bootstrap.min.js') }}"></script>
	<script src ="{{ asset ('js/jquery.dataTables.min.js') }}"></script>	
    <style>
    body{
        background-color: #e9ebee;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-default" style="background-color:white">
		<div class="container-fluid">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1;">
				<ul class="nav navbar-nav col-md-5" style="margin-top:10px">
						 <li ><a href="{{ url('/') }}"style="display:inline"><img src="{{ URL::to('/kaskus.png') }}" style='width: 200px;height: 45px;'></a></li>
				</ul>
				
			<div class="col-md-3">
				<form class="navbar-form navbar-left">
					<div class="form-group"style="margin-top:15px">
					<input type="text" class="form-control" placeholder="Search">
					</div>
				</form>
			</div>
			<ul class="nav navbar-nav" style="margin-top:10px">
				<li ><p class="navbar-text">BUAT THREAD</p></li>
				<li><button type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span>	</button></li>
				<li><a href="/login"><strong>MASUK</strong></a></li>
			</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
		</nav>
	<div class="navbar navbar-default" style="margin-top:-20px;height:10px ;background-color: #1998ed;">
		 <ul class="nav navbar-nav ">
				<li class="dropdown" style="margin-left:90px">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white"role="button" aria-haspopup="true" aria-expanded="false">Kategori <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<?php 
							$kategori=DB::select("SELECT * FROM KATEGORIS");
							foreach ($kategori as $row) {
								echo "<li><a href='/kategori/$row->id_kategori'>$row->nama_kategori</a></li>";
							}	
						?>
					</ul>
				</li>
		</ul>
		<ul class="nav navbar-nav" style="color:white;">
			<?php 
				$kategori = App\kategori::select("nama_kategori","id_kategori")->orderBy("nama_kategori","asc")->take(5)->get();
				foreach ($kategori as $row) {
					?>
						<li><a href="<?=url("/kategori\/").$row->id_kategori?>" style="margin-right:10px;"><strong style="color:white"><?=$row->nama_kategori?></strong></a></li>
					<?php 
				}	
			?>
		</ul>
	</div>
	<form method="POST" action="{{ route('login') }}">
	@csrf
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color:white">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<div class="col-md-6 ">
						<h3 style="margin-top:50px;color:blue">Masuk</h3>
					</div>
					<div class="col-md-6" style="margin-top:40px;">
						<a style="margin-top:50px;color:black">atau</a>
					<a style="color:blue" href="{{url('/register')}}">Daftar</a>
					</div>
				</div>
				<div class="modal-body">
					<h5>Username :</h5>
					{{ Form::text('txtusername', '', ['class'=>'form-control', 'id'=>'txtusername']) }}	
					<h5>Password:</h5>
					{{Form::password("txtpassword",array("class"=>"form-control", 'id'=>'txtpassword'))}}
					<br><br>	
					{{ Form::submit('Masuk', ['name'=>'btnlogin', 'id'=>'btnlogin', 'class'=>'form-control btn btn-primary']) }}
					<br><br>
					<h5 style="color:blue;">Lupa Password?</h5>
				</div>
				<div class="modal-footer" style="background-color:white">
					<button type="button" class="btn btn-primary" >Facebook</button>
					<button type="button" class="btn btn-primary">Google</button>
					<button type="button" class="btn btn-primary">Twitter</button>
				</div>
			</div>
		</div>
	</div>
	</form>
    @yield("isi") 
</head>
<body>
</body>
</html>