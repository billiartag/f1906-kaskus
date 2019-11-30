@extends('layouts.pageUser')
@section('judul_page','Edit | Profile')

@section('isi')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6" style='background-color:white;padding-left:5%;padding-right:5%;padding-top:2%;padding-bottom:2%;'>
            <h1>Edit Profile</h1>
            <form method='post' action='/submit_edit'>
            @csrf
                Username <br>
                <input class='form-control' name='username' id='username' type="text" value='{{ Auth::user()->username }}' disabled><br><br>
                Nama <br>
                <input class='form-control' name='nama' id='nama' type="text" value='{{ Auth::user()->nama }}'><br><br>
                Email <br>
                <input class='form-control' name='email' id='email' type="text" value='{{Auth::user()->email }}'><br><br>
                Nomor Handphone <br>
                <input class='form-control' name='nomor' id='nomor' type="number" value='{{Auth::user()->nomor }}'><br><br>
                Jenis Kelamin <br>
                <input type="radio" class="form-check-input" name="gender" id="gender" value='0'>Pria 
                <input type="radio" class="form-check-input" name="gender" id="gender" value='1'>Wanita <br><br>
                
                Tanggal Lahir <br>
                <input class='form-control' type="date" name='tgl_lahir' id='tgl_lahir' value='{{Auth::user()->tgl_lahir_user}}'> <br><br>

                
                Alamat <br>
                <input class='form-control' type="text" name='alamat' id='alamat' value='{{Auth::user()->alamat_user}}'> <br><br>

                Negara <br>
                <input class='form-control' type="text" name='negara' id='negara' value='{{Auth::user()->negara_user}}'> <br><br>
                
                Provinsi <br>
                <input class='form-control' type="text" name='provinsi' id='provinsi' value='{{Auth::user()->provinsi_user}}'> <br><br>
                


                Biodata <br>
                <textarea name="bio" id="bio" cols="90" rows="10"></textarea>
                <br><br>
                <input type="submit" class='btn btn-primary'value='accept' id='accept'> 
                @foreach ($errors->all() as $error)
                    <li class='text-danger'>{{ $error }}</li>
                @endforeach
            </form>
            <br>
            <a href="{{url('/profile')}}" class='btn btn-danger'>cancel</a>
        </div>
        <div class="col-md-3"></div>
    </div>

@endsection