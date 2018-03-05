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
              {!! Form::select('kota', ['Ambon' => 'Ambon', 'Balikpapan' => 'Balikpapan', 'Banda Aceh' => 'Banda Aceh', 'Bandar Lampung' => 'Bandar Lampung', 'Banjar' => 'Banjar', 'Banjarbaru' => 'Banjarbaru', 'Banjarmasin' => 'Banjarmasin', 'Batam' => 'Batam', 'Batu' => 'Batu', 'Bau-Bau' => 'Bau-Bau', 'Bekasi' => 'Bekasi', 'Bekasi' => 'Bekasi', 'Bima' => 'Bima', 'Binjai' => 'Binjai', 'Bitung' => 'Bitung', 'Blitar' => 'Blitar', 'Bogor' => 'Bogor', 'Bontang' => 'Bontang', 'Bukit Tinggi' => 'Bukit Tinggi', 'Cilegon' => 'Cilegon', 'Cimahi' => 'Cimahi', 'Cirebon' => 'Cirebon', 'Denpasar' => 'Denpasar', 'Depok' => 'Depok', 'Dumai' => 'Dumai', 'Gorontalo' => 'Gorontalo', 'Gunungsitoli' => 'Gunungsitoli', 'Jakarta' => 'Jakarta', 'Jambi' => 'Jambi', 'Jayapura' => 'Jayapura', 'Kediri' => 'Kediri', 'Kotamubagu' => 'Kotamubagu', 'Kupang<' => 'Kupang', 'Langsa' => 'Langsa', 'Lhokseumawe' => 'Lhokseumawe', 'Lubuklinggau' => 'Lubuklinggau', 'Madiun' => 'Madiun', 'Magelang' => 'Magelang', 'Makassar' => 'Makassar', 'Malang' => 'Malang', 'Manado' => 'Manado', 'Mataram' => 'Mataram', 'Medan' => 'Medan', 'Metro' => 'Metro', 'Mojokerto' => 'Mojokerto', 'Padang' => 'Padang', 'Pagaralam' => 'Pagaralam', 'Palangkaraya' => 'Palangkaraya', 'Palembang' => 'Palembang', 'Palopo' => 'Palopo', 'Palu' => 'Palu', 'Pangkal Pinang' => 'Pangkal Pinang', 'Parepare' => 'Parepare', 'Pariaman' => 'Pariaman', 'Pasuruan' => 'Pasuruan', 'Payakumbuh' => 'Payakumbuh', 'Pekalongan' => 'Pekalongan', 'Pekanbaru' => 'Pekanbaru', 'Pematangsiantar' => 'Pematangsiantar', 'Pontianak' => 'Pontianak', 'Prabumulih' => 'Prabumulih', 'Probolinggo' => 'Probolinggo', 'Sabang' => 'Sabang', 'Salatiga' => 'Salatiga', 'Sawahlunto' => 'Sawahlunto', 'Semarang' => 'Semarang', 'Serang' => 'Serang', 'Sibloga' => 'Sibloga', 'Singkawang' => 'Singkawang','Solok' => 'Solok', 'Subulussalam' => 'Subulussalam', 'Sukabumi' => 'Sukabumi', 'Surabaya' => 'Surabaya', 'Surakarta' => 'Surakarta', 'Tangerang' => 'Tangerang', 'Tanjungpinang' => 'Tanjungpinang', 'Tanjungbalai' => 'Tanjungbalai','Tarakan' => 'Tarakan', 'Tasikmalaya' => 'Tasikmalaya', 'Tebing Tinggi' => 'Tebing Tinggi', 'Tegal' => 'Tegal', 'Ternate' => 'Ternate', 'Tidore' => 'Tidore', 'Tual' => 'Tual', 'Yogyakarta' => 'Yogyakarta']) !!}
            </div>
        </option>
    </option>
</select>
    <br>
    <label><b>Pekerjaan</b></label>
    <div class="select relative">
              <i class="fa fa-angle-down"></i>
              {!! Form::select('pekerjaan', ['Pegawai Negri Sipil' => 'Pegawai Negri Sipil', 'Karyawan Swasta' => 'Karyawan Swasta', 'Wirausaha' => 'Wirausaha']) !!}
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
