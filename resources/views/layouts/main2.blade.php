<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head class="nav-type-2">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KAHMIPRENEUR | @yield('title')</title>
 
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/appz.css') }}" rel="stylesheet">  
    <link href="{{ asset('css/stylez.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    
    <nav class="navbar navbar-static-top">
      <div class="navigation">
        <div class="container relative">

          <form method="get" class="search-wrap">
            <input type="search" class="form-control" placeholder="Type &amp; Hit Enter">
          </form>

          <div class="row">
            <div class="navbar-header">
              <!-- Logo -->
              <div class="logo">
                <div class="logo-wrap">
                  <a href="{{ url('/') }}">
                    <img class="logo" src="{{ asset('img/logo2.png') }}"" alt="logo">
                  </a>
                 
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" >
                
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div> 
          </div>
        </div>
        <!-- end navbar-header -->

            <div class="col-md-9 nav-wrap right">
              
              <div class="collapse navbar-collapse" id="navbar-collapse">
                
                <ul class="nav navbar-nav navbar-right">

                  <li class="">
                    <a href="{{ url('/') }}">HOME</a>
                  </li>

                  <li class="">
                    <a href="{{ url('about') }}">KAHMIPRENEUR</a>
                  </li>

                  <li class="">
                    <a href="{{ url('movie') }}">GALERI</a>
                  </li>

                  <li class="">
                    <a href="{{ url('berita') }}">BERITA</a>
                  </li>

                  <li class="">
                    <a href="{{ url('forum') }}">FORUM</a>
                  </li>           
                  @if (Route::has('login'))
                  <li class="dropdown">
                   @auth
                    <a href="#" class="dropdown-toggle">{{ Auth::user()->name }}</a>
                    <ul class="dropdown-menu menu-right">
                      <li><a href="{{ route('profile.index') }}">Profile</a></li>
                      <li><a href="{{ route('logout') }}" onclick="event.preventDefault();                   document.getElementById('logout-form').submit();">Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                        </form>

                      </li>
                    </ul>
                    @else
                    <a href="#" class="dropdown-toggle">MEMBERSHIP</a>
                    <ul class="dropdown-menu menu-right">
                      <li><a href="{{ route('login') }}">Log in</a></li>
                      <li><a href="{{ route('register') }}">Sign Up</a></li>
                    </ul>
                    @endauth
                  </li>
                   @endif
                   
              </div> <!-- end collapse -->
            </div> <!-- end col -->
            
          </div> <!-- end row -->
        </div> <!-- end container -->
      </div> <!-- end navigation -->
    </nav> <!-- end navbar -->

</head>
<body>
    <div id="app">


        <main class="py-4">
            <div class="container">
                @include('layouts.info')
            </div>

            @yield('content')
 
        </main>
    </div>
    <!-- Footer Type-2 -->
    @include('layouts.partials.footer-two')

    <div id="back-to-top">
      <a href="#top"><i class="fa fa-angle-up"></i></a>
    </div>

  </div> <!-- end main-wrapper -->
    <!-- Script -->
    <script src="{{ asset('js/appz.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    
    @yield('js')

</body>
</html>
