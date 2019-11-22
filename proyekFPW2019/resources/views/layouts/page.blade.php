<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('judul_page')</title>
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"> --}}
	<link   href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet">
	<link   href="{{ asset ('css/jquery.dataTables.min.css') }}" rel="stylesheet">
	<link   href="{{ asset ('css/mystyle.css') }}" rel="stylesheet" type="text/css">

	<script src ="{{ asset ('js/jquery.js') }}"></script>
	<script src ="{{ asset ('js/bootstrap.min.js') }}"></script>
	<script src ="{{ asset ('js/jquery.dataTables.min.js') }}"></script>	
    <style>
    body{
        background-color: #e9ebee
    }
    </style>
</head>
<body>
    {{ Form::open(array('url' => 'dashboard')) }}
    <nav class="navbar navbar-default" style="background-color:white">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1;">
            <ul class="nav navbar-nav" style="margin-top:10px">
                <li ><img src="{{ URL::to('/kaskus.png') }}" style='width: 200px;height: 45px;'></li>
                <li ><a href="#" ><strong>Forum</strong></a></li>
                <li><a href="#"><strong>TV</strong></a></li>
                <li><a href="#"><strong>Podcast</strong></a></li>
                <li><a href="#"><strong>Kapten</strong></a></li>
                <li><a href="#"><strong>Jual Beli</strong></a></li>
            </ul>
            
            <div class="col-md-3">
                <form class="navbar-form navbar-left">
                    <div class="form-group"style="margin-top:15px">
                    <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
            </div>
            <p class="navbar-text">BUAT THREAD</p>
            <button type="button" class="btn btn-default btn-lg">
                <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
            </button>
            <ul class="nav navbar-nav ">
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Separated link</a></li>
                </ul>
                </li>
            </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        </nav>
        <div class="navbar navbar-default" style="margin-top:-20px;height:10px ;background-color: #1998ed;">
		 <ul class="nav navbar-nav ">
				<li class="dropdown" style="margin-left:90px">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white"role="button" aria-haspopup="true" aria-expanded="false">Kategori <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Separated link</a></li>
					</ul>
				</li>
		</ul>
		<ul class="nav navbar-nav" style="color:white;">
			<li><a href="#" style="margin-right:10px;margin-left:25px; "><strong style="color:white">STORY</strong></a></li>
			<li><a href="#" style="margin-right:10px;"><strong style="color:white">HOBBY</strong></a></li>
			<li><a href="#" style="margin-right:10px;"><strong style="color:white">GAMES</strong></a></li>
			<li><a href="#" style="margin-right:10px;"><strong style="color:white">ENTERTAINMENT</strong></a></li>
			<li><a href="#" style="margin-right:10px;"><strong style="color:white">FEMALE</strong></a></li>
			<li><a href="#" style="margin-right:10px;"><strong style="color:white">TECH</strong></a></li>
			<li><a href="#" style="margin-right:10px;"><strong style="color:white">AUTOMOTIVE</strong></a></li>
			<li><a href="#" style="margin-right:10px;"><strong style="color:white">SPORTS</strong></a></li>
			<li><a href="#" style="margin-right:10px;"><strong style="color:white">FOOD & TRAVEL</strong></a></li>
			<li><a href="#"><strong style="color:white">NEWS</strong></a></li>              
		</ul>
	</div>
    {{ Form::close() }}
    @yield("isi") 
</head>
<body>
</body>
</html>