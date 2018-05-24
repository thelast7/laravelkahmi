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
                    <a href="{{ url('tips') }}">TIPS</a>
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
