@extends('layouts.master-register')
@section('content')
    <section class="page-title style-2">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1>Pendaftaran</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{ url('/') }}">Home</a>
              </li>
              <li>
                <a href="{{ route('register') }}">Membership</a>
              </li>
              <li class="active">
                Pendaftaran
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>

{{-- ini untuk menampilkan smua error message ketika data tidak di input --}}
@if(session('errors'))
	<div class="alert alert-warning" id="add-new-warning"> <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
		<i class="fa fa-warning"></i> 
		@foreach($errors->all() as $error)
			<div>{{ $error }}</div>
		@endforeach
    </div>
@endif 

<form role="form" method="POST" action="{{ url('/register') }}" style="border:0px solid #ccc" enctype="multipart/form-data">
   {{ csrf_field() }}
  <div class="container">
    Silahkan Isi Form Dibawah Ini.
    <hr>

<!-- 	<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
		{!! Form::label('name','Nama Lengkap') !!}
		<div class="">
			{!! Form::text('name', null) !!} -->
			{{-- ini menampilkan error message setiap form --}}
<!-- 			{!! $errors->first('name', '<p class="help-block">:message</p>') !!}
		</div>
	</div> -->
   
<!--    <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
    {!! Form::label('username') !!}
    <div class="">
      {!! Form::text('username', null) !!} -->
      {{-- ini menampilkan error message setiap form --}}
<!--       {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
    </div>
  </div> -->
  
  <label><b>Nama Lengkap</b></label>
    <input id="name" type="text" name="Nama Lengkap" value="{{ old('Nama Lengkap') }}" placeholder="Masukan Nama" >
  @if ($errors->has('name'))
    <span class="help-block">
      <strong>{{ $errors->first('name') }}</strong>
    </span>
  @endif

	<label><b>Username</b></label>
    <input id="username" type="text" name="username" value="{{ old('username') }}" placeholder="Masukan Username" >
    	@if ($errors->has('username'))
    		<span class="help-block">
    			<strong>{{ $errors->first('username') }}</strong>
    		</span>
    	@endif

  <label><b>Alamat E-Mail</b></label>
    <input id="email" type="text" name="email" value="{{ old('email') }}" placeholder="Masukan E-mail" >
    	@if ($errors->has('email'))
    		<span class="help-block">
    			<strong>{{ $errors->first('email') }}</strong>
    		</span>
    	@endif

  <label><b>Kata Sandi</b></label>
	<input id="password" type="password" name="password" placeholder="Masukan Kata Sandi" >
	@if ($errors->has('password'))
		<span class="help-block">
			<strong>{{ $errors->first('password') }}</strong>
		</span>
	@endif

    <label><b>Konfirmasi Kata Sandi</b></label>
    <input id="password-confirm" type="password" name="password_confirmation" placeholder="Masukan konfirmasi kata sandi" >

    <label><b>Gender</b></label>
	<ul class="radio-buttons">
    @if ($errors->has('jenis_kelamin'))
    <span class="help-block">
      <strong>{{ $errors->first('jenis_kelamin') }}</strong>
    </span>
  @endif
	  <li>
		<input type="radio" class="input-radio" name="jenis_kelamin" id="radio1" value="laki-laki">
		<label for="radio1">Male</label>
	  </li>
	  <li>
		<input type="radio" class="input-radio" name="jenis_kelamin" id="radio2" value="perempuan">
		<label for="radio2">Female</label>
	  </li>
	</ul>

    <label><b>NIK</b></label>
	<input id="nik" type="text" name="nik" value="{{ old('nik') }}" placeholder="Masukan NIK">
	@if ($errors->has('nik'))
		<span class="help-block">
			<strong>{{ $errors->first('nik') }}</strong>
		</span>
	@endif

    <label><b>No Handphone</b></label>
    <input id="no_hp" type="text" name="no_hp" value="{{ old('no_hp') }}" placeholder="Masukan No Handphone">
  @if ($errors->has('no_hp'))
    <span class="help-block">
      <strong>{{ $errors->first('no_hp') }}</strong>
    </span>
  @endif

    <label><b>Tanggal Lahir</b></label>
    <form action="/action_page.php">
    <input type="date" name="tanggal_lahir">
  @if ($errors->has('tanggal_lahir'))
    <span class="help-block">
      <strong>{{ $errors->first('tanggal_lahir') }}</strong>
    </span>
  @endif
    </form>

    <label><b>Alamat Lengkap</b></label>
    <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat Lengkap" rows="8"></textarea>
  @if ($errors->has('alamat'))
    <span class="help-block">
      <strong>{{ $errors->first('alamat') }}</strong>
    </span>
  @endif

    <label><b>Kota Asal</b></label>
    <div class="select relative">
              <i class="fa fa-angle-down"></i>
              {!! Form::select('kota', ['Ambon' => 'Ambon', 'Balikpapan' => 'Balikpapan', 'Banda Aceh' => 'Banda Aceh', 'Bandar Lampung' => 'Bandar Lampung', 'Banjar' => 'Banjar', 'Banjarbaru' => 'Banjarbaru', 'Banjarmasin' => 'Banjarmasin', 'Batam' => 'Batam', 'Batu' => 'Batu', 'Bau-Bau' => 'Bau-Bau', 'Bekasi' => 'Bekasi', 'Bekasi' => 'Bekasi', 'Bima' => 'Bima', 'Binjai' => 'Binjai', 'Bitung' => 'Bitung', 'Blitar' => 'Blitar', 'Bogor' => 'Bogor', 'Bontang' => 'Bontang', 'Bukit Tinggi' => 'Bukit Tinggi', 'Cilegon' => 'Cilegon', 'Cimahi' => 'Cimahi', 'Cirebon' => 'Cirebon', 'Denpasar' => 'Denpasar', 'Depok' => 'Depok', 'Dumai' => 'Dumai', 'Gorontalo' => 'Gorontalo', 'Gunungsitoli' => 'Gunungsitoli', 'Jakarta' => 'Jakarta', 'Jambi' => 'Jambi', 'Jayapura' => 'Jayapura', 'Kediri' => 'Kediri', 'Kotamubagu' => 'Kotamubagu', 'Kupang<' => 'Kupang', 'Langsa' => 'Langsa', 'Lhokseumawe' => 'Lhokseumawe', 'Lubuklinggau' => 'Lubuklinggau', 'Madiun' => 'Madiun', 'Magelang' => 'Magelang', 'Makassar' => 'Makassar', 'Malang' => 'Malang', 'Manado' => 'Manado', 'Mataram' => 'Mataram', 'Medan' => 'Medan', 'Metro' => 'Metro', 'Mojokerto' => 'Mojokerto', 'Padang' => 'Padang', 'Pagaralam' => 'Pagaralam', 'Palangkaraya' => 'Palangkaraya', 'Palembang' => 'Palembang', 'Palopo' => 'Palopo', 'Palu' => 'Palu', 'Pangkal Pinang' => 'Pangkal Pinang', 'Parepare' => 'Parepare', 'Pariaman' => 'Pariaman', 'Pasuruan' => 'Pasuruan', 'Payakumbuh' => 'Payakumbuh', 'Pekalongan' => 'Pekalongan', 'Pekanbaru' => 'Pekanbaru', 'Pematangsiantar' => 'Pematangsiantar', 'Pontianak' => 'Pontianak', 'Prabumulih' => 'Prabumulih', 'Probolinggo' => 'Probolinggo', 'Sabang' => 'Sabang', 'Salatiga' => 'Salatiga', 'Sawahlunto' => 'Sawahlunto', 'Semarang' => 'Semarang', 'Serang' => 'Serang', 'Sibloga' => 'Sibloga', 'Singkawang' => 'Singkawang','Solok' => 'Solok', 'Subulussalam' => 'Subulussalam', 'Sukabumi' => 'Sukabumi', 'Surabaya' => 'Surabaya', 'Surakarta' => 'Surakarta', 'Tangerang' => 'Tangerang', 'Tanjungpinang' => 'Tanjungpinang', 'Tanjungbalai' => 'Tanjungbalai','Tarakan' => 'Tarakan', 'Tasikmalaya' => 'Tasikmalaya', 'Tebing Tinggi' => 'Tebing Tinggi', 'Tegal' => 'Tegal', 'Ternate' => 'Ternate', 'Tidore' => 'Tidore', 'Tual' => 'Tual', 'Yogyakarta' => 'Yogyakarta']) !!}
            </div>
        </option>
    </option>
</select>
    <br>
    <label><b>Pekerjaan</b></label>
    <div class="select relative">
              <i class="fa fa-angle-down"></i>
              {!! Form::select('pekerjaan', ['Pegawai Negeri Sipil' => 'Pegawai Negeri Sipil', 'Karyawan Swasta' => 'Karyawan Swasta', 'Wirausaha' => 'Wirausaha']) !!}
            </div>
    
    <div class="Foto">
      <label><b>Unggah Foto Diri</b></label>
        <input type="file" name="photo_diri">
          @if ($errors->has('photo_diri'))
            <span class="help-block">
              <strong>{{ $errors->first('photo_diri') }}</strong>
            </span>
          @endif
    </div>
    
    <div>
    <label><b>Unggah Foto KTP</b></label>
    	<input type="file" name="photo_ktp">
  @if ($errors->has('photo_ktp'))
    <span class="help-block">
      <strong>{{ $errors->first('photo_ktp') }}</strong>
    </span>
  @endif
    </div>
    
    <div>
    <label><b>Unggah Foto Usaha</b></label>
      <input type="file" name="photo_usaha">
  @if ($errors->has('photo_usaha'))
    <span class="help-block">
      <strong>{{ $errors->first('photo_usaha') }}</strong>
    </span>
  @endif
    </div>
    

    <label><b>Harapan Bergabung di KAHMIPRENEUR </b></label>
    
    <textarea class="form-control" id="harapan" name="harapan" placeholder="Masukan Harapan anda" rows="3"></textarea>
  @if ($errors->has('harapan'))
    <span class="help-block">
      <strong>{{ $errors->first('harapan') }}</strong>
    </span>
  @endif
      <div>
      <input type="checkbox" class="input-checkbox" name="checkbox" id="checkbox1" value="1" checked="checked">
      <label for="checkbox1">Dengan ini saya telah mengerti dan menyetujui <a href="#" style="color:dodgerblue">syarat dan ketentuan</a> yang berlaku.</label>
      </p>
    </div>
    <br>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Daftar</button>
    </div>
  </div>
</form>
</section> <!-- end page title -->
@endsection
