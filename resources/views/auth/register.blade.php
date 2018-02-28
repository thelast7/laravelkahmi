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

<form role="form" method="POST" action="{{ url('/register') }}" style="border:0px solid #ccc" enctype="multipart/form-data">
   {{ csrf_field() }}
  <div class="container">
    Silahkan Isi Form Dibawah Ini.
    <hr>

    <label><b>Nama Lengkap</b></label>
    <br>
    <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Masukan nama lengkap" required autofocus>
	@if ($errors->has('name'))
		<span class="help-block">
			<strong>{{ $errors->first('name') }}</strong>
		</span>
	@endif   
    <br>

	<label><b>Username</b></label>
    <br>
    <input id="name" type="text" name="username" value="{{ old('username') }}" placeholder="Masukan Username" required>
	@if ($errors->has('username'))
		<span class="help-block">
			<strong>{{ $errors->first('username') }}</strong>
		</span>
	@endif

    <br>
    <label><b>Alamat E-Mail</b></label>
    <br>
    <input id="email" type="text" name="email" value="{{ old('email') }}" placeholder="Masukan E-mail" required>
	@if ($errors->has('name'))
		<span class="help-block">
			<strong>{{ $errors->first('name') }}</strong>
		</span>
	@endif

    <br>
    <label><b>Kata Sandi</b></label>
    <br>
	<input id="password" type="password" name="password" placeholder="Masukan Kata Sandi" required>
	@if ($errors->has('password'))
		<span class="help-block">
			<strong>{{ $errors->first('password') }}</strong>
		</span>
	@endif

    <br>
    <label><b>Konfirmasi Kata Sandi</b></label>
    <br>
    <input id="password-confirm" type="password" name="password_confirmation" placeholder="Masukan konfirmasi kata sandi" required>
    <br>
    <label><b>Gender</b></label>
	<ul class="radio-buttons">
	  <li>
		<input type="radio" class="input-radio" name="jenis_kelamin" id="radio1" value="laki-laki" checked="checked">
		<label for="radio1">Male</label>
	  </li>
	  <li>
		<input type="radio" class="input-radio" name="jenis_kelamin" id="radio2" value="perempuan">
		<label for="radio2">Female</label>
	  </li>
	</ul>
    <br>
    <label><b>NIK</b></label>
    <br>
    <input id="nik" type="text" name="nik" value="{{ old('nik') }}" placeholder="Masukan NIK">
    <br>
    <label><b>No Handphone</b></label>
    <br>
    <input id="no_hp" type="text" name="no_hp" value="{{ old('no_hp') }}" placeholder="Masukan No Handphone">
    <br>
    <label><b>Tanggal Lahir</b></label>
    <form action="/action_page.php">
    <input type="date" name="tanggal_lahir">
    </form>
    <label><b>Alamat Lengkap</b></label>
    <br>
    
    <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat Lengkap" rows="8"></textarea>
    <br>
    <label><b>Kota Asal</b></label>
    <div class="select relative">
              <i class="fa fa-angle-down"></i>
              <select name="kota">
                <option selected value="default">Select an option</option>
                <option value="kota 1">Ambon</option>
                <option value="kota 2">Balikpapan</option>
                <option value="kota 3">Banda Aceh</option>
                <option value="kota 4">Bandar Lampung</option>
                <option value="kota 5">Bandung</option>
                <option value="kota 6">Banjar</option>
                <option value="kota 7">Banjarbaru</option>
                <option value="kota 8">Banjarmasin</option>
                <option value="kota 9">Batam</option>
                <option value="kota 10">Batu</option>
                <option value="kota 11">Bau-Bau</option>
                <option value="kota 12">Bekasi</option>
                <option value="kota 13">Bengkulu</option>
                <option value="kota 14">Bima</option>
                <option value="kota 15">Binjai</option>
                <option value="kota 16">Bitung</option>
                <option value="kota 17">Blitar</option>
                <option value="kota 18">Bogor</option>
                <option value="kota 19">Bontang</option>
                <option value="kota 20">Bukit Tinggi</option>
                <option value="kota 1">Cilegon</option>
                <option value="kota 2">Cimahi</option>
                <option value="kota 3">Cirebon</option>
                <option value="kota 4">Denpasar</option>
                <option value="kota 5">Depok</option>
                <option value="kota 6">Dumai</option>
                <option value="kota 7">Gorontalo</option>
                <option value="kota 8">Gunungsitoli</option>
                <option value="kota 9">Jakarta</option>
                <option value="kota 10">Jambi</option>
                <option value="kota 1">Jayapura</option>
                <option value="kota 2">Kediri</option>
                <option value="kota 3">Kendari</option>
                <option value="kota 4">Kotamubagu</option>
                <option value="kota 5">Kupang</option>
                <option value="kota 6">Langsa</option>
                <option value="kota 7">Lhokseumawe</option>
                <option value="kota 8">Lubuklinggau</option>
                <option value="kota 9">Madiun</option>
                <option value="kota 10">Magelang</option>
                <option value="kota 1">Makassar</option>
                <option value="kota 2">Malang</option>
                <option value="kota 3">Manado</option>
                <option value="kota 4">Mataram</option>
                <option value="kota 5">Medan</option>
                <option value="kota 6">Metro</option>
                <option value="kota 7">Mojokerto</option>
                <option value="kota 8">Padang</option>
                <option value="kota 9">Pagaralam</option>
                <option value="kota 10">Palangkaraya</option>
                <option value="kota 1">Palembang</option>
                <option value="kota 2">Palopo</option>
                <option value="kota 3">Palu</option>
                <option value="kota 4">Pangkal Pinang</option>
                <option value="kota 5">Parepare</option>
                <option value="kota 6">Pariaman</option>
                <option value="kota 7">Pasuruan</option>
                <option value="kota 8">Payakumbuh<option>
                <option value="kota 9">Pekalongan</option>
                <option value="kota 10">Pekanbaru</option>
                <option value="kota 1">Pematangsiantar</option>
                <option value="kota 2">Pontianak</option>
                <option value="kota 3">Prabumulih</option>
                <option value="kota 4">Probolinggo</option>
                <option value="kota 5">Sabang</option>
                <option value="kota 6">Salatiga</option>
                <option value="kota 7">Samarinda</option>
                <option value="kota 8">Sawahlunto</option>
                <option value="kota 9">Semarang</option>
                <option value="kota 10">Serang</option>
                <option value="kota 1">Sibloga</option>
                <option value="kota 2">Singkawang</option>
                <option value="kota 3">Solok</option>
                <option value="kota 4">Sorong</option>
                <option value="kota 5">Subulussalam</option>
                <option value="kota 6">Sukabumi</option>
                <option value="kota 7">Jambi</option>
                <option value="kota 8">Surabaya</option>
                <option value="kota 9">Surakarta</option>
                <option value="kota 10">Tangerang</option>
                <option value="kota 1">Tanjungpinang</option>
                <option value="kota 2">Tanjungbalai</option>
                <option value="kota 3">Tarakan</option>
                <option value="kota 4">Tasikmalaya</option>
                <option value="kota 5">Tebing Tinggi</option>
                <option value="kota 6">Tegal</option>
                <option value="kota 7">Ternate</option>
                <option value="kota 8">Tidore</option>
                <option value="kota 9">Tual</option>
                <option value="kota 10">Yogyakarta</option>

              </select>
            </div>
    <br>
    <label><b>Pekerjaan/Bidang Usaha</b></label>
    <div class="select relative">
              <i class="fa fa-angle-down"></i>
              <select name="pekerjaan">
                <option selected value="default">Select an option</option>
                <option value="kota 1">Pegawai Negeri Sipil</option>
                <option value="kota 2">Karyawan Swasta</option>
                <option value="kota 3">Wirausaha</option>
              </select>
            </div>
    <br>       
    <div class="Foto">
    <label><b>Unggah Foto Diri</b></label>
   		<input type="file" name="photo_diri">
    </div>
    <br>
    <div>
    <label><b>Unggah Foto KTP</b></label>
    	<input type="file" name="photo_ktp">
    </div>
    <br>
    <div>
    <label><b>Unggah Foto Usaha</b></label>
      <input type="file" name="photo_usaha">
    </div>
    <br>

    <label><b>Harapan Bergabung di KAHMIPRENEUR </b></label>
    
    <textarea class="form-control" id="harapan" name="harapan" placeholder="Masukan Harapan anda" rows="3"></textarea>
    <br>
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
