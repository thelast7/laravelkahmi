@extends('layouts.master-two')   
@section('content')
  <div class="main-wrapper-mp oh">

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
<hr >

<div class="container target">
    <div class="row">
        <div class="col-sm-10">
             <h1 style="font-family: 'Black Ops One', cursive;">{{ Auth::user()->name }}</h1>
        	
        	<!--<button type="button" class="btn btn-success" href="http;//www.yashverma.tk">My Website</button>  
        	<button type="button"  class="btn btn-info"  > <a style="color:white"  href="mailto:yk.verma2000@gmail.com">Send me a message</a></button>
			<br>
			-->
			<div class="panel panel-default">
				<div class="panel-body"  style="font-family: 'Croissant One', cursive;">
					<p>{{ $profile->harapan }}</p>
				</div>
			</div>

      	</div>

	<div class="col-sm-2">
		<a class="pull-right"> 
			<img title="profile image" class="img-circle img-responsive" src="img/photodiri/{{ $profile->photo_diri }}">
		</a>
	</div>
    </div>
  <br>
    <div class="row">
        <div class="col-sm-3">
            <!--left col-->
            <ul class="list-group">
                <li class="list-group-item text-muted" contenteditable="false"  style="font-family: /*'Croissant One'*/, cursive;">My Profile &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
                ;
                <a href="{{ route ('profile.edit', $profile->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit </a></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong >Name</strong></span>{{ Auth::user()->name }}</li>
                
                <li class="list-group-item text-right"><span class="pull-left"><strong >User Name</strong></span>{{ $profile->username }} </li>
                <li class="list-group-item text-right"><span class="pull-left"><strong >Alamat e-mail</strong></span> {{ Auth::user()->email }}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong >No Handphone</strong></span> {{ Auth::user()->no_hp }}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Tanggal Lahir</strong></span> {{ Auth::user()->tanggal_lahir }}</li>
                 <li class="list-group-item text-right"><span class="pull-left"><strong class="">Alamat Lengkap</strong></span> {{ Auth::user()->alamat }}</li>
                 <li class="list-group-item text-right"><span class="pull-left"><strong class="">Kota Asal</strong></span> {{ Auth::user()->kota }}</li>
                 <li class="list-group-item text-right"><span class="pull-left"><strong class="">Bidang Usaha</strong></span> {{ Auth::user()->pekerjaan }}</li>
             </ul>
        </div>

        <!--/col-3-->
        <div class="col-sm-9" style="" contenteditable="false">
            <div class="panel panel-default">
                <div class="panel-heading" style="sans-serif:'Croissant One', cursive;">Hallo, Saya Muhammad Taufik</div>

                <div class="panel-body">
                <!-- long description -->
                		 <p>Bisnis Furniture akan selalu ada. Kebutuhan akan sandang, pangan, serta papan adalah pokok kehidupan manusia. Sedangkan semakin berkembangnya zaman dan era yang kian global inilah yang membuat kebutuhan tersiernya pun juga meningkat pesat.

                            Kebutuhan tempat tinggal semakin tinggi, seiring dengan semakin meledaknya pertambahan penduduk khususnya seperti yang ada di Indonesia saat ini, maka secara otomatis memiliki dampak pada peningkatan ketertarikan dan permintaan masyarakat pada Furniture ini.<p>
                    </div>

            </div>

    <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">

		<!-- my INI DI SINI PHOTO USAHA SAMAKAN DI ATAS AJA -->
		<h1 style="font-family: 'Black Ops One', cursive;">Produk Saya</h1>
			<a class="pull-center"> 
				<img title="cover" class="img-responsive" src="img/2.jpg">
			</a>
		</div>
	</div>
</div>


   <div id="push"></div>
</div>
</ul>
</div>
@endsection
