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
                <option value="kota 21">Cilegon</option>
                <option value="kota 22">Cimahi</option>
                <option value="kota 23">Cirebon</option>
                <option value="kota 24">Denpasar</option>
                <option value="kota 25">Depok</option>
                <option value="kota 26">Dumai</option>
                <option value="kota 27">Gorontalo</option>
                <option value="kota 28">Gunungsitoli</option>
                <option value="kota 29">Jakarta</option>
                <option value="kota 30">Jambi</option>
                <option value="kota 31">Jayapura</option>
                <option value="kota 32">Kediri</option>
                <option value="kota 33">Kendari</option>
                <option value="kota 34">Kotamubagu</option>
                <option value="kota 35">Kupang</option>
                <option value="kota 36">Langsa</option>
                <option value="kota 37">Lhokseumawe</option>
                <option value="kota 38">Lubuklinggau</option>
                <option value="kota 39">Madiun</option>
                <option value="kota 40">Magelang</option>
                <option value="kota 41">Makassar</option>
                <option value="kota 42">Malang</option>
                <option value="kota 43">Manado</option>
                <option value="kota 44">Mataram</option>
                <option value="kota 45">Medan</option>
                <option value="kota 46">Metro</option>
                <option value="kota 47">Mojokerto</option>
                <option value="kota 48">Padang</option>
                <option value="kota 49">Pagaralam</option>
                <option value="kota 40">Palangkaraya</option>
                <option value="kota 41">Palembang</option>
                <option value="kota 42">Palopo</option>
                <option value="kota 43">Palu</option>
                <option value="kota 44">Pangkal Pinang</option>
                <option value="kota 45">Parepare</option>
                <option value="kota 46">Pariaman</option>
                <option value="kota 47">Pasuruan</option>
                <option value="kota 48">Payakumbuh<option>
                <option value="kota 49">Pekalongan</option>
                <option value="kota 50">Pekanbaru</option>
                <option value="kota 51">Pematangsiantar</option>
                <option value="kota 52">Pontianak</option>
                <option value="kota 53">Prabumulih</option>
                <option value="kota 54">Probolinggo</option>
                <option value="kota 55">Sabang</option>
                <option value="kota 56">Salatiga</option>
                <option value="kota 57">Samarinda</option>
                <option value="kota 58">Sawahlunto</option>
                <option value="kota 59">Semarang</option>
                <option value="kota 60">Serang</option>
                <option value="kota 61">Sibloga</option>
                <option value="kota 62">Singkawang</option>
                <option value="kota 63">Solok</option>
                <option value="kota 64">Sorong</option>
                <option value="kota 65">Subulussalam</option>
                <option value="kota 66">Sukabumi</option>
                <option value="kota 67">Jambi</option>
                <option value="kota 68">Surabaya</option>
                <option value="kota 69">Surakarta</option>
                <option value="kota 70">Tangerang</option>
                <option value="kota 71">Tanjungpinang</option>
                <option value="kota 72">Tanjungbalai</option>
                <option value="kota 73">Tarakan</option>
                <option value="kota 74">Tasikmalaya</option>
                <option value="kota 75">Tebing Tinggi</option>
                <option value="kota 76">Tegal</option>
                <option value="kota 77">Ternate</option>
                <option value="kota 78">Tidore</option>
                <option value="kota 79">Tual</option>
                <option value="kota 80">Yogyakarta</option>
              </select>
            </div>
        </option>
    </option>
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
