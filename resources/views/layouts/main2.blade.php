<!DOCTYPE html>
<html lang="en">
<head>
  <title>KAHMIPRENEUR @yield('title')</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic%7COpen+Sans:400,600,700,400italic' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" />
  <link rel="stylesheet" href="{{ asset('revolution/css/settings.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/rev-slider.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/sliders.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/spacings.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/custome-login.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/custome-masuk.css') }}" />

  <!-- Favicons -->
  <link rel="icon" href="{{ asset('img/favicon.ico') }}">

</head>

<body style="font-family: 'Open Sans', sans-serif;">

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      "Loading..."
    </div>
  </div>

  <header class="nav-type-2">
    
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
  </header>

    <div class="main-wrapper-mp oh">

    <!-- Revolution Partial Slider -->
    <!-- layouts.partials.breadcumb sudah diapus -->
    <!-- Our Services -->

    <!-- From Blog Content -->
    @yield('content')
    <!-- End Blog -->

    <!-- Footer Type-2 -->
    @include('layouts.partials.footer-two')

    <div id="back-to-top">
      <a href="#top"><i class="fa fa-angle-up"></i></a>
    </div>

  </div> <!-- end main-wrapper -->
  
  <!-- jQuery Scripts -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/rev-slider.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/scripts.js')}}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    @stack('scripts')
</body>
</html>


