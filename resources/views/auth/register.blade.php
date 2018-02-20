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
    <p>Silahkan Isi Form Dibawah Ini.</p>
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
    <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Masukan E-mail" required>
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
    <input type="date" name="bday">
    </form>
    <label><b>Alamat Lengkap</b></label>
    <br>
    <textarea id="alamat" name="alamat" placeholder="Masukan Alamat Lengkap" rows="3"></textarea>
    <br>
    <label><b>Kecamatan</b></label>
    <div class="select relative">
              <i class="fa fa-angle-down"></i>
              <select name="kota">
                <option selected value="default">Select an option</option>
                <option value="kota 1">Kec 1</option>
                <option value="kota 2">Kec 2</option>
                <option value="kota 3">Kec 3</option>
                <option value="kota 4">Kec 4</option>
                <option value="kota 5">Kec 5</option>
                <option value="kota 6">Kec 6</option>
                <option value="kota 3">Kec 7</option>
                <option value="kota 4">Kec 8</option>
                <option value="kota 5">Kec 9</option>
                <option value="kota 6">Kec 10</option>
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

    <label><b>Harapan Bergabung di KAHMIPRENEUR </b></label>
    <textarea id="harapan" name="harapan" placeholder="Masukan Harapan anda" rows="3"></textarea>
    <br>
      <div>
      <input type="checkbox" class="input-checkbox" name="checkbox" id="checkbox1" value="1" checked="checked">
      <label for="checkbox1">Dengan ini saya telah mengerti dan menyetujui <a href="#" style="color:dodgerblue">syarat dan ketentuan</a> yang berlaku.</label>
      </p>
    </div>
    <br>
    <div class="clearfix">
      <button type="button" class="cancelbtn">Batal</button>
      <button type="submit" class="signupbtn">Daftar</button>
    </div>
  </div>
</form>
</section> <!-- end page title -->
@endsection
