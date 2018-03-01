@extends('layouts.master-two')   
@section('content')

 <section class="page-title style-2">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1>Profile</h1>
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

<div class="container target">
    <div class="row">
        <div class="col-sm-10">
             <h1 style="font-family: 'sans-serif';">{{ Auth::user()->name }}</h1>
        	
			<div class="panel panel-default">
				<div class="panel-body"  style="font-family: 'sans-serif'">
					<p>{{ $profile->harapan }}</p>
				</div>
			</div>

      	</div>

      <div class="col-sm-2"><a class="pull-right"> <img title="profile image" class="img-circle img-responsive" src="img/profile/{{ $profile->photo_ktp }}" alt=""></a></div>
    </div>
  <br>
    <div class="row">
        <div class="col-sm-3">
            <!--left col-->
              <ul class="list-group">
                <li class="list-group-item text-muted" contenteditable="false"  style="font-family: 'sans-serif';">My Profile
                <a href="{{ route ('profile.edit', $profile->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit </a></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong >Name</strong></span>{{ Auth::user()->name }}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong >User Name</strong></span>{{ $profile->username }} </li>
                <li class="list-group-item text-right"><span class="pull-left"><strong >Alamat e-mail</strong></span> {{ Auth::user()->email }}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong >No Handphone</strong></span> {{ Auth::user()->no_hp }}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Tanggal Lahir</strong></span>{{ Auth::user()->tanggal_lahir }}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Alamat Lengkap</strong></span>{{ Auth::user()->alamat }}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Kota Asal</strong></span> {{ Auth::user()->kota }}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Bidang Usaha</strong></span> {{ Auth::user()->pekerjaan }}</li>
                <li class="panel panel-default pull-center">
                <a href="{{ route ('profile.edit', $profile->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i>edit profil</a>
                </li>
              </ul>
        </div>

          <div>
             <h1 style="font-family: 'sans-serif';">Produk Saya</h1>
            <a class="pull-center"> <img title="cover" class="img-responsive">{{ Auth::user()->foto_usaha }}</a>
             <div class="panel-heading"></div>
          </div>

</div>
</ul>
</div>
@endsection
