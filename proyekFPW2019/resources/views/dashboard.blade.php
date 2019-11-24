@extends(Session::has("namelogin")?"layouts/pageUser":"layouts/page")
@section('judul_page',"KASKUS - Berbagi Hobi, Berkomunitas")
@section('isi')
{{ Form::open(array('url' => 'dashboard')) }}
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
								  <li><img src="{{ URL::to('/kaskus.png') }}" style='width: 40px;height: 40px; border-radius :100px 100px;'></li>
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
								  <li><img src="{{ URL::to('/kaskus.png') }}" style='width: 40px;height: 40px;border-radius :100px 100px;'></li>
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
@endsection