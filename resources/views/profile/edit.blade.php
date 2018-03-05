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

 {!! Form::model($profile, ['route' => ['profile.update', $profile->id], 'files' => true, 'method' => 'put', 'class' => 'form-horizontal']) !!}

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
              {!! Form::select('kota', ['Ambon' => 'Ambon', 'Balikpapan' => 'Balikpapan', 'Banda Aceh' => 'Banda Aceh', 'Bandar Lampung' => 'Bandar Lampung', 'Banjar' => 'Banjar', 'Banjarbaru' => 'Banjarbaru', 'Banjarmasin' => 'Banjarmasin', 'Batam' => 'Batam', 'Batu' => 'Batu', 'Bau-Bau' => 'Bau-Bau', 'Bekasi' => 'Bekasi', 'Bekasi' => 'Bekasi', 'Bima' => 'Bima', 'Binjai' => 'Binjai', 'Bitung' => 'Bitung', 'Blitar' => 'Blitar', 'Bogor' => 'Bogor', 'Bontang' => 'Bontang', 'Bukit Tinggi' => 'Bukit Tinggi', 'Cilegon' => 'Cilegon', 'Cimahi' => 'Cimahi', 'Cirebon' => 'Cirebon', 'Denpasar' => 'Denpasar', 'Depok' => 'Depok', 'Dumai' => 'Dumai', 'Gorontalo' => 'Gorontalo', 'Gunungsitoli' => 'Gunungsitoli', 'Jakarta' => 'Jakarta', 'Jambi' => 'Jambi', 'Jayapura' => 'Jayapura', 'Kediri' => 'Kediri', 'Kotamubagu' => 'Kotamubagu', 'Kupang<' => 'Kupang', 'Langsa' => 'Langsa', 'Lhokseumawe' => 'Lhokseumawe', 'Lubuklinggau' => 'Lubuklinggau', 'Madiun' => 'Madiun', 'Magelang' => 'Magelang', 'Makassar' => 'Makassar', 'Malang' => 'Malang', 'Manado' => 'Manado', 'Mataram' => 'Mataram', 'Medan' => 'Medan', 'Metro' => 'Metro', 'Mojokerto' => 'Mojokerto', 'Padang' => 'Padang', 'Pagaralam' => 'Pagaralam', 'Palangkaraya' => 'Palangkaraya', 'Palembang' => 'Palembang', 'Palopo' => 'Palopo', 'Palu' => 'Palu', 'Pangkal Pinang' => 'Pangkal Pinang', 'Parepare' => 'Parepare', 'Pariaman' => 'Pariaman', 'Pasuruan' => 'Pasuruan', 'Payakumbuh' => 'Payakumbuh', 'Pekalongan' => 'Pekalongan', 'Pekanbaru' => 'Pekanbaru', 'Pematangsiantar' => 'Pematangsiantar', 'Pontianak' => 'Pontianak', 'Prabumulih' => 'Prabumulih', 'Probolinggo' => 'Probolinggo', 'Sabang' => 'Sabang', 'Salatiga' => 'Salatiga', 'Sawahlunto' => 'Sawahlunto', 'Semarang' => 'Semarang', 'Serang' => 'Serang', 'Sibloga' => 'Sibloga', 'Singkawang' => 'Singkawang','Solok' => 'Solok', 'Subulussalam' => 'Subulussalam', 'Sukabumi' => 'Sukabumi', 'Surabaya' => 'Surabaya', 'Surakarta' => 'Surakarta', 'Tangerang' => 'Tangerang', 'Tanjungpinang' => 'Tanjungpinang', 'Tanjungbalai' => 'Tanjungbalai','Tarakan' => 'Tarakan', 'Tasikmalaya' => 'Tasikmalaya', 'Tebing Tinggi' => 'Tebing Tinggi', 'Tegal' => 'Tegal', 'Ternate' => 'Ternate', 'Tidore' => 'Tidore', 'Tual' => 'Tual', 'Yogyakarta' => 'Yogyakarta']) !!}
            </div>
    <br>
    <label><b>Pekerjaan</b></label>
    <div class="select relative">
              <i class="fa fa-angle-down"></i>
               {!! Form::select('pekerjaan', ['Pegawai Negri Sipil' => 'Pegawai Negri Sipil', 'Karyawan Swasta' => 'Karyawan Swasta', 'Wirausaha' => 'Wirausaha']) !!}
            </div>
            
                
    <br>       
    <div class="Foto">
    <label><b>Unggah Foto Diri</b></label>
   		{!! Form::file('photo_diri') !!}
      {!! $errors->first('photo_diri', '<p class="help-block">:message</p>') !!}
    </div>
    <br>
    <div>
    <label><b>Unggah Foto Usaha</b></label>
    	{!! Form::file('photo_usaha') !!}
      {!! $errors->first('photo_usaha', '<p class="help-block">:message</p>') !!}
    </div>
    <br>
  
    <br>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Update</button>
    </div>
  </div>
  </div>
  {!! Form::close() !!}
</section> <!-- end page title -->
@endsection
