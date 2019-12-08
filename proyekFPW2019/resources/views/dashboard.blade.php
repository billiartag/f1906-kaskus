@extends(Auth::check()?"layouts/pageUser":"layouts/page")
@section('judul_page',"KASKUS - Berbagi Hobi, Berkomunitas")
@section('isi')
{{ Form::open(array('url' => 'dashboard')) }}
	<div class="container">
		<div class="row" style="display:none">
			<div class="col-md-12" style='border: 1px solid black;'><img src="{{ URL::to('/iklan.gif') }}" style='width: 100%; height: 300px;'></div>
		</div>
		<div class="row" style="margin-top:20px">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12" >
						<div class="row">
							<div class="col-md-12" style="padding:20px">
								<div class="nav navbar-nav" style="vertical-align:center;font-size:2em;">
								  <li><i class="material-icons">fiber_new</i></li>
								  <li style="margin-left:0.5em">New Threads</li>
								</div>
							</div>
						</div>
						<div class="row">
							<?php 
								foreach($thread as $row){
									?>
									<div class="col-md-12">
											<div class="panel panel-default">
											<div class="panel-body">
													<div class="col-md-12" style="margin-top:10px">
														<div class="col-md-1">
															<img src="{{ URL::to('/profile.jpg') }}" style='width: 40px;height: 40px;margin-right:10px'>
														</div>
														<div class="col-md-9">
															<div class="col-md-12">
																<a style="margin-right:10px;margin-bottom:10px;text-size:40px;" href="<?=url("/kategori\/").$row->id?>"><?=$row->nama?> di <?=$row->nama_kategori?></a>
															</div>
															<div class="col-md-12">
																<a style="margin-right:10px;margin-bottom:10px;text-size:40px;"><?=$row->jabatan?></a>
															</div>
														</div>
														<div class="col-md-2">
															<a style="margin-right:10px;margin-bottom:10px;text-size:40px;">Profile</a>
														</div>
													</div>
													<p>
													<a style="margin-right:10px;margin-bottom:10px;text-size:40px;margin-left:%;" href="<?=url("/post/$row->id_thread")?>"><strong><h4><?=$row->judul?></h4></strong></a>
													</p>
											</div>
											</div>
										</div>
									<?php
								}
							?>
					</div>
				</div>
				
				<div class="col-md-12" >
					<div class="row">
						<div class="col-md-12" style="padding:20px">
							<div class="nav navbar-nav" style="vertical-align:center;font-size:2em;">
							  <li><i class="material-icons">whatshot</i></li>
							  <li style="margin-left:0.5em">Hot Threads</li>
							</div>
						</div>
					</div>
					<div class="row">
						<?php 
							foreach($hot as $row){
								?>
								<div class="col-md-12">
										<div class="panel panel-default">
										<div class="panel-body">
												<div class="col-md-12" style="margin-top:10px">
													<div class="col-md-1">
														<img src="{{ URL::to('/profile.jpg') }}" style='width: 40px;height: 40px;margin-right:10px'>
													</div>
													<div class="col-md-9">
														<div class="col-md-12">
															<a style="margin-right:10px;margin-bottom:10px;text-size:40px;" href="<?=url("/kategori\/").$row->id?>"><?=$row->nama?> di <?=$row->nama_kategori?></a>
														</div>
														<div class="col-md-12">
															<a style="margin-right:10px;margin-bottom:10px;text-size:40px;"><?=$row->jabatan?></a>
														</div>
													</div>
													<div class="col-md-2">
														<a style="margin-right:10px;margin-bottom:10px;text-size:40px;">Profile</a>
													</div>
												</div>
												<p>
												<a style="margin-right:10px;margin-bottom:10px;text-size:40px;margin-left:%;" href="<?=url("/post/$row->id_thread")?>"><strong><h4><?=$row->judul?></h4></strong></a>
												</p>
										</div>
										</div>
									</div>
								<?php
							}
						?>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="row" style="background-color:white; margin:2%">
				<a class="btn btn-primary" style="width: 90%;margin:5%;padding:10px;" role="button" href="<?=url("/createthread")?>">Buat Thread Sekarang</a>
			</div>
		</div>
	</div>
{{ Form::close() }}	
@endsection