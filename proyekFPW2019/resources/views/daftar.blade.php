<html lang="en">
<head>
<link rel="icon" href="images/favicon.ico" type="image/ico">
<meta charset="utf-8">
	<title>KASKUS - Berbagi Hobi,Berkomunitas</title>
	<link   href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet">
	<link   href="{{ asset ('css/jquery.dataTables.min.css') }}" rel="stylesheet">
	<link   href="{{ asset ('css/mystyle.css') }}" rel="stylesheet" type="text/css">

	<script src ="{{ asset ('js/jquery.js') }}"></script>
	<script src ="{{ asset ('js/bootstrap.min.js') }}"></script>
	<script src ="{{ asset ('js/jquery.dataTables.min.js') }}"></script>	
<head>
{{ Form::open(array('url' => 'daftar')) }}
<div class="row">
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
</div>
{{ Form::close() }}