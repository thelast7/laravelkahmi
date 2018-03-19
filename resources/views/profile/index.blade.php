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
                Edit Profil
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
</section>


<section class="section-wrap">
 <div class="container">
    <div class="row">
       

  <div class="col-sm-2">
    <a class="pull-left"> 
      <img title="profile image" class="img-box img-responsive"  src="img/photodiri/{{ $profile->photo_diri }}">
    </a>
  </div>

   <div class="col-sm-10">
             <h1>{{ Auth::user()->name }}</h1>
          
            <div class="panel panel-default">
              <div class="panel-body"  style="font-family: 'sans-serif'">
                <p>{{ $profile->harapan }}</p>
              </div>
            </div>

        </div>

  <br>
    <div class="container">
    <div class="row">
        <div class="col-sm-4">
            <!--left col-->
              <ul class="list-group">
                 <h2> My Profile </h2>
                <li class="list-group-item text-right"><span class="pull-left"><strong >Name</strong></span>{{ Auth::user()->name }}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong >User Name</strong></span>{{ $profile->username }} </li>
                <li class="list-group-item text-right"><span class="pull-left"><strong >Alamat e-mail</strong></span> {{ Auth::user()->email }}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong >No Handphone</strong></span> {{ Auth::user()->no_hp }}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Tanggal Lahir</strong></span>{{ Auth::user()->tanggal_lahir }}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Alamat Lengkap</strong></span>{{ Auth::user()->alamat }}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Kota Asal</strong></span> {{ Auth::user()->kota }}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Pekerjaan</strong></span> {{ Auth::user()->pekerjaan }}</li>
                <br>
                <a href="{{ route ('profile.edit', $profile->id) }}" class="btn btn-sm btn-dark"><i class="fa fa-pencil"></i> Edit </a>
              </ul>
        </div>

    <div class="col-md-8">
      <a class="pull-right">
      <h1> My Produk </h1> 
      <img style="width: 100%;" title="photo_usaha" class="img-box img-responsive" src="img/photousaha/{{ $profile->photo_usaha }}">
      </a>
    </div>
  </div>
        <!--/col-3-->
        <div class="col-sm-9" style="" contenteditable="false">
        

</div>
</ul>
</div>
</section>
@endsection
