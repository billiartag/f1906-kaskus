
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Dermaga Berlian Sejahtera</title>
	<link   href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet">
	<link   href="{{ asset ('css/jquery.dataTables.min.css') }}" rel="stylesheet">
	<link   href="{{ asset ('css/mystyle.css') }}" rel="stylesheet" type="text/css">

	<script src ="{{ asset ('js/jquery.js') }}"></script>
	<script src ="{{ asset ('js/bootstrap.min.js') }}"></script>
	<script src ="{{ asset ('js/jquery.dataTables.min.js') }}"></script>	
<head>

{{ Form::open(array('url' => 'register')) }}
<div class="container">
    <div class="row">
        <div class="col-md-2">
            Username : 
        </div>
        <div class="col-md-3">
            {{ Form::text('txtusername', '', ['class'=>'form-control', 'id'=>'txtusername']) }}		
        </div>

    </div>
    {{ Form::submit('Simpan Member', ['name'=>'btnsimpan', 'id'=>'btnsimpan', 'class'=>'btn btn-primary']) }}
</div>
{{ Form::close() }}

<br><br>

<UL>
@foreach($allmember as $row)
    <LI>{{ $row->username }}</LI>
@endforeach
</UL>