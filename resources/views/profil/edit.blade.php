@extends('layouts.master-register')
@section('content')
    <section class="page-title style-2">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1>EDIT PROFILE</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{ url('/') }}">Home</a>
              </li>
              <li>
                <a href="{{ route('register') }}">Membership</a>
              </li>
              <li class="active">
                EDIT PROFILE
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>

 {!! Form::model($profile, ['route' => ['profil.update', $profile->id], 'files' => true, 'method' => 'put', 'class' => 'form-horizontal']) !!}

   {{ csrf_field() }}
  <div class="container">
    Silahkan Isi EDIT PROFILE Dibawah Ini.
    <hr>
    
    <label><b>Kata Sandi</b></label>
    <br>
	   {!! Form::password('password', ['class' => 'form-control']) !!}
      {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
    <br>
    <label><b>Konfirmasi Kata Sandi</b></label>
    <br>
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    {!! $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}
    <br>
    <label><b>Gender</b></label>
	<ul class="radio-buttons">
	  <li>
		 {!! Form::radio('jenis_kelamin', 'laki-laki', true) !!}
     <label>Male</label>
	  </li>
	  <li>
		{!! Form::radio('jenis_kelamin', 'perempuan', true) !!}
		<label>Female</label>
	  </li>
	</ul>
    <br>
    <label><b>NIK</b></label>
    <br>
    {!! Form::text('nik', null, ['class' => 'form-control col-md-7 col-xs-12']) !!}
    {!! $errors->first('nik', '<p class="help-block">:message</p>') !!}
    <br>
    <label><b>No Handphone</b></label>
    <br>
    {!! Form::text('no_hp', null, ['class' => 'form-control col-md-7 col-xs-12']) !!}
    {!! $errors->first('no_hp', '<p class="help-block">:message</p>') !!}
    <br>
    <label><b>Tanggal Lahir</b></label>
    {!! Form::date('tanggal_lahir', null, ['class' => 'form-control col-md-7 col-xs-12']) !!}
    {!! $errors->first('tanggal_lahir', '<p class="help-block">:message</p>') !!}

    <br>
    <label><b>Alamat Lengkap</b></label>
    {!! Form::text('alamat', null, ['class' => 'form-control col-md-7 col-xs-12']) !!}
    {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
    <br>
    <label><b>Kota Asal</b></label>
    <div class="select relative">
              <i class="fa fa-angle-down"></i>
              {!! Form::select('kota', ['Kota 1' => 'Kota 1', 'Kota 2' => 'Kota 2']) !!}
            </div>
    <br>
    <label><b>Pekerjaan/Bidang Usaha</b></label>
    <div class="select relative">
              <i class="fa fa-angle-down"></i>
               {!! Form::select('pekerjaan', ['Pegawai Negri Sipil' => 'Pegaiwai Negri Sipil', 'Wirausaha' => 'Wirausaha']) !!}
            </div>
    <br>       
    <div class="Foto">
    <label><b>Unggah Foto Diri</b></label>
   		{!! Form::file('photo_diri') !!}
      {!! $errors->first('photo_diri', '<p class="help-block">:message</p>') !!}
    </div>
    <br>
    <div>
    <label><b>Unggah Foto KTP</b></label>
    	{!! Form::file('photo_ktp') !!}
      {!! $errors->first('photo_ktp', '<p class="help-block">:message</p>') !!}
    </div>
    <br>
    </div>
    <br>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Update</button>
    </div>
  </div>
  {!! Form::close() !!}
</section> <!-- end page title -->
@endsection
