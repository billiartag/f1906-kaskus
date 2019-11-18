<html lang="en">
<head>
<link rel="icon" href="images/favicon.ico" type="image/ico">
<meta charset="utf-8">
	<title>KASKUS - Berbagi Hobi, Berkomunitas</title>
	<link   href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet">
	<link   href="{{ asset ('css/jquery.dataTables.min.css') }}" rel="stylesheet">
	<link   href="{{ asset ('css/mystyle.css') }}" rel="stylesheet" type="text/css">

	<script src ="{{ asset ('js/jquery.js') }}"></script>
	<script src ="{{ asset ('js/bootstrap.min.js') }}"></script>
	<script src ="{{ asset ('js/jquery.dataTables.min.js') }}"></script>	
<head>
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
	<div class="container">
		<div class="row">
			<div class="col-md-12" style='border: 1px solid black;'><img src="{{ URL::to('/iklan.gif') }}" style='width: 100%; height: 300px;'></div>
		</div>
		<div class="row" style="margin-top:20px">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-12">
								<div class="nav navbar-nav">
								  <li><img src="{{ URL::to('/kaskus.png') }}" style='width: 40px;height: 40px;'></li>
								  <li><a style="margin-right:10px;margin-bottom:10px;text-size:40px;"><strong>Obrolan Hangat</strong></a></li>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" style='border-bottom: 1px solid black; padding-bottom:10px;margin-bottom:10px;'>
								<div class="col-md-12">
									<a style="margin-bottom:10px;text-size:40px;"><strong>Nostalgia Media Sosial, Generasi Tahun 90-an Masuk Sini!</strong></a>
								</div>
								<div class="col-md-12">
									<a style="margin-bottom:10px;text-size:40px;">dikomentari <strong>bandarjigonk</strong> </a>
								</div>
							</div>
							<div class="col-md-12" style='border-bottom: 1px solid black; padding-bottom:10px;margin-bottom:10px;'>
								<div class="col-md-12">
									<a style="margin-bottom:10px;text-size:40px;"><strong>Nostalgia Media Sosial, Generasi Tahun 90-an Masuk Sini!</strong></a>
								</div>
								<div class="col-md-12">
									<a style="margin-bottom:10px;text-size:40px;">dikomentari <strong>bandarjigonk</strong> </a>
								</div>
							</div>
							<div class="col-md-12" style='border-bottom: 1px solid black; padding-bottom:10px;margin-bottom:10px;'>
								<div class="col-md-12">
									<a style="margin-bottom:10px;text-size:40px;"><strong>Nostalgia Media Sosial, Generasi Tahun 90-an Masuk Sini!</strong></a>
								</div>
								<div class="col-md-12">
									<a style="margin-bottom:10px;text-size:40px;">dikomentari <strong>bandarjigonk</strong> </a>
								</div>
							</div>
							<div class="col-md-12" style='border-bottom: 1px solid black; padding-bottom:10px;margin-bottom:10px;'>
								<div class="col-md-12">
									<a style="margin-bottom:10px;text-size:40px;"><strong>Nostalgia Media Sosial, Generasi Tahun 90-an Masuk Sini!</strong></a>
								</div>
								<div class="col-md-12">
									<a style="margin-bottom:10px;text-size:40px;">dikomentari <strong>bandarjigonk</strong> </a>
								</div>
							</div>
							<div class="col-md-12" style='border-bottom: 1px solid black; padding-bottom:10px;margin-bottom:10px;'>
								<div class="col-md-12">
									<a style="margin-bottom:10px;text-size:40px;"><strong>Nostalgia Media Sosial, Generasi Tahun 90-an Masuk Sini!</strong></a>
								</div>
								<div class="col-md-12">
									<a style="margin-bottom:10px;text-size:40px;">dikomentari <strong>bandarjigonk</strong> </a>
								</div>
							</div>							
						</div>
					</div>
					<div class="col-md-8" >
						<div class="row">
							<div class="col-md-12">
								<div class="nav navbar-nav">
								  <li><img src="{{ URL::to('/kaskus.png') }}" style='width: 40px;height: 40px;'></li>
								  <li><a style="margin-right:10px;margin-bottom:10px;text-size:40px;"><strong>Hot Threads</strong></a></li>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
								  <div class="panel-body">
										<div class="col-md-12" style="margin-bottom:10px">
											<div class="col-md-1">
												<img src="{{ URL::to('/profile.jpg') }}" style='width: 40px;height: 40px;margin-right:10px'>
											</div>
											<div class="col-md-9">
												<div class="col-md-12">
													<a style="margin-right:10px;margin-bottom:10px;text-size:40px;">ebipo di The Lounge</a>
												</div>
												<div class="col-md-12">
													<a style="margin-right:10px;margin-bottom:10px;text-size:40px;">KASKUS Plus</a>
												</div>
											</div>
											<div class="col-md-2">
												<a style="margin-right:10px;margin-bottom:10px;text-size:40px;">Profile</a>
											</div>
										</div>
										<p>
											<video width="450" height="200"style="border: 1px solid black;" controls>
												<source  src="Anthony Brancati Neo-Funk (ft. Larnell Lewis & Robi Botos).mp4" type="video/mp4">
											</video><br>
										</p>
										<a style="margin-right:10px;margin-bottom:10px;text-size:40px;margin-left:10px;"><strong>INI JUDUL POST. coba tulis disini sesuatu dong coba tulis disini sesuatu dong coba tulis disini sesuatu dong</strong></a>
								  </div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="panel panel-default">
								  <div class="panel-body">
										<div class="col-md-12" style="margin-bottom:10px">
											<div class="col-md-1">
												<img src="{{ URL::to('/profile.jpg') }}" style='width: 40px;height: 40px;margin-right:10px'>
											</div>
											<div class="col-md-9">
												<div class="col-md-12">
													<a style="margin-right:10px;margin-bottom:10px;text-size:40px;">ebipo di The Lounge</a>
												</div>
												<div class="col-md-12">
													<a style="margin-right:10px;margin-bottom:10px;text-size:40px;">KASKUS Plus</a>
												</div>
											</div>
											<div class="col-md-2">
												<a style="margin-right:10px;margin-bottom:10px;text-size:40px;">Profile</a>
											</div>
										</div>
										<p>
											<video width="450" height="200"style="border: 1px solid black;" controls>
												<source  src="Anthony Brancati Neo-Funk (ft. Larnell Lewis & Robi Botos).mp4" type="video/mp4">
											</video><br>
										</p>
										<a style="margin-right:10px;margin-bottom:10px;text-size:40px;margin-left:10px;"><strong>INI JUDUL POST. coba tulis disini sesuatu dong coba tulis disini sesuatu dong coba tulis disini sesuatu dong</strong></a>
								  </div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="panel panel-default">
								  <div class="panel-body">
									<div class="col-md-12">
										<div class="col-md-1">
											<a href="https://tv.kaskus.co.id/?utm_source=kaskus-forum&utm_medium=widget-logo">
												<img  src="{{ URL::to('/profile.jpg') }}" style='width: 40px;height: 40px;margin-right:10px'>
											</a>
										</div>
										<div class="col-md-9">
											<div class="col-md-12">
												<a style="margin-right:10px;margin-bottom:10px;text-size:40px;">ebipo di The Lounge</a>
											</div>
											<div class="col-md-12">
												<a style="margin-right:10px;margin-bottom:10px;text-size:40px;">KASKUS Plus</a>
											</div>
										</div>
										<div class="col-md-2">
											<a style="margin-right:10px;margin-bottom:10px;text-size:40px;">Profile</a>
										</div>
									</div>
									<img src="{{ URL::to('/test.jpg') }}" style='width: 100%;height: 100px; margin-top:10px;margin-bottom:10px;border: 1px solid black;'><br>
									<a style="margin-right:10px;margin-bottom:10px;text-size:40px;margin-left:10px;"><strong>INI JUDUL POST. coba tulis disini sesuatu dong coba tulis disini sesuatu dong coba tulis disini sesuatu dong</strong></a>
								  </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
				  <div class="col-md-12 ">
					<div class="thumbnail ">
					 <img src="{{ URL::to('/minecraft.jpg') }}" style='width: 100%;height: 50px;'>
					  <div class="caption">
						<p><a class="btn btn-info" style="width: 100%;height: 35px;" role="button">Buat Thread Sekarang</a>
					  </div>
					</div>
				  </div>
				</div>
				<br><br>
				<div class="row">
				  <div class="col-md-12 ">
					<div class="thumbnail ">
					 <a href="https://tv.kaskus.co.id"><img src="{{ URL::to('/kaskustv.png') }}" style='width: 100%;height: 20px;'></a>
					  <div class="caption">
						<p> <video width="330" height="220" controls>
							  <source src="Shaun Martin - Yellow Jacket (7 Summers).mp4" type="video/mp4">
							</video>
						</p>
						<a style="margin-bottom:10px;text-size:40px;"><strong>Shaun Martin - Yellow Jacket (7 Summers)</strong></a>
						<div class="row">
							<div class="col-sm-6 col-md-6">
								<img src="{{ URL::to('/iklanberdiri1.jpg') }}" style='width: 100%;height: 150px;'>
							</div>
							<div class="col-sm-6 col-md-6">
								<img src="{{ URL::to('/iklanberdiri1.jpg') }}" style='width: 100%;height: 150px;'>
							</div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			</div>
		</div>
	</div>
{{ Form::close() }}