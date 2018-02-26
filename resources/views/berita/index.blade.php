<!DOCTYPE html>
<html lang="en">
<head>
  <title>KAHMIPRENEUR | BERITA</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic%7COpen+Sans:400,600,700,400italic' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/font-icons.css" />
  <link rel="stylesheet" href="revolution/css/settings.css" />
  <link rel="stylesheet" href="css/rev-slider.css" />
  <link rel="stylesheet" href="css/sliders.css">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <link rel="stylesheet" href="css/spacings.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/color.css" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

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
              <div class="logo-container">
                <div class="logo-wrap">
                  <a href="{{ url('/') }}">
                    <img class="logo" src="img/logo_dark.png" alt="logo">
                  </a>
                </div>
              </div>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div> <!-- end navbar-header -->

            <div class="col-md-9 nav-wrap right">
              <div class="collapse navbar-collapse" id="navbar-collapse">

                <ul class="nav navbar-nav navbar-right">

                  <li class="dropdown">
                    <a href="{{ url('/') }}">HOME</a>
                  </li>

                  <li class="dropdown">
                    <a href="{{ url('about') }}">KAHMIPRENEUR</a>
                  </li>

                  <li class="dropdown">
                    <a href="{{ url('movie') }}">GALERI</a>
                  </li>

                  <li class="dropdown active">
                    <a href="{{ url('berita') }}">BERITA</a>
                  </li>

                  <li class="dropdown">
                    <a href="{{ url('forum') }}">FORUM</a>
                  </li>

                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle">MEMBERSHIP</a>
                    <ul class="dropdown-menu menu-right">
                      <li><a href="{{ route('login') }}">Log in</a></li>
                      <li><a href="{{ route('register') }}">Sign Up</a></li>
                    </ul>
                  </li>

              <!-- <li id="mobile-search">
                    <form method="get" class="mobile-search">
                      <input type="search" class="form-control" placeholder="Search...">
                      <button type="submit" class="search-button">
                        <i class="fa fa-search"></i>
                      </button>
                    </form>
                  </li>

                  <li>
                    <a href="#" class="nav-search">
                      <i class="fa fa-search search-trigger"></i>
                      <i class="fa fa-times search-close"></i>
                    </a>
                  </li> --> 

                </ul> <!-- end menu -->
              </div> <!-- end collapse -->
            </div> <!-- end col -->

          </div> <!-- end row -->
        </div> <!-- end container -->
      </div> <!-- end navigation -->
    </nav> <!-- end navbar -->
  </header>


  <div class="main-wrapper-mp oh">

    <!-- Page Title -->
    <section class="page-title style-2">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1>KAHMIPRENEUR NEWS</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{ url('/') }}">Home</a>
              </li>
              <li class="active">
                Berita
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section> <!-- end page title -->


    <!-- Portfolio Single -->
    

    <!-- Blog Standard -->
    <section class="section-wrap blog-standard">
      <div class="container relative">
        <div class="row">
          
          <!-- content -->
          <div class="col-sm-8 blog-content">
          @foreach($berita as $ber)
            <!-- standard post -->
            <div class="entry-item">
              <div class="entry-img">
                <a href="{{ url('/') }}">
                  <img src="img/post/{{ $ber->image }}" alt="">
                </a>
              </div>

              <div class="entry-date hidden-sm hidden-xs">
                <span>{{ $ber->TanggalAt }}</span>
                <span>{{ $ber->BulanAt }}</span>                    
              </div>

              <div class="entry-title">
                <h2>
                  <a href="{{ url('isiberita') }}">{{ $ber->title }}</a>
                </h2>
              </div>
              <ul class="entry-meta">
                <li class="entry-date">
                  <a href="#">{{ $ber->created_at }}</a>
                </li>
                <li class="entry-author">
                  by <a href="#">{{ $ber->author->name }}</a>
                </li>
                <li class="entry-category">
                  in <a href="#">{{ $ber->category_id }}</a>
                </li>
                <li>
                  <a href="{{ route('isiberita', $ber->slug) }}" class="entry-comments">99 Comments</a>
                </li>               
              </ul>

              <div class="entry">
                <div class="entry-content">
                  {{ $ber->body }}
                  <br>
                  <a href="{{ route('isiberita', $ber->slug) }}" class="read-more">Selengkapnya</a>
                  <i class="icon arrow_right"></i>
                </div>
              </div>
            </div> <!-- end entry item -->
            @endforeach
            <!-- gallery post -->
            <!-- <div class="entry-item">
              <div class="entry-slider">
                <div class="flexslider" id="one-img-slide">
                  <ul class="slides">
                    <li>
                      <a href="#">
                        <img src="img/blog/gallery_post_img_1.jpg" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="img/blog/gallery_post_img_2.jpg" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="img/blog/gallery_post_img_3.jpg" alt="">
                      </a>
                    </li>
                  </ul>
                </div>
              </div> --> <!-- end slider -->

              <!-- <div class="entry-date hidden-sm hidden-xs">
                <span>11</span>
                <span>MAR</span>                    
              </div>

              <div class="entry-title">
                <h2>
                  <a href="{{ url('isiberita') }}">Ini adalah Judul dari beritanya.</a>
                </h2>
              </div>
              <ul class="entry-meta">
                <li class="entry-date">
                  <a href="#">11 March, 2018</a>
                </li>
                <li class="entry-author">
                  by <a href="#">Iqbal Buchori</a>
                </li>
                <li class="entry-category">
                  in <a href="#">Programmer</a>
                </li>
                <li>
                  <a href="{{ url('isiberita') }}" class="entry-comments">69 Comments</a>
                </li>               
              </ul>

              <div class="entry">         

                <div class="entry-content">
                  Wakil Gubernur DKI Jakarta Sandiaga Salahuddin Uno mengisi kuliah umum atau studium generale bertema "Being A Winning Young Entrepreneur" di Fakultas Agama Islam, Universitas Muhammadiyah Prof. Dr. Hamka (Uhamka), Jakarta Selata. Dalam kesempatan ini, Sandi menyampaikan mahasiswa pasca-lulus meraih gelar sarjana dapat membuka lapangan pekerjaan melalui wirausaha daripada mencari lapangan pekerjaan..
                  <br>
                  <a href="{{ url('isiberita') }}" class="read-more">Selengkapnya</a>
                  <i class="icon arrow_right"></i>
                </div>
              </div>
            </div> --> <!-- end entry item -->

            <!--  blockquote post
            	<div class="entry-item"> -->
              <div class="entry blockquote mt-0">             
                <blockquote class="blockquote-style-1 text-center mb-0">
                  <i class="fa fa-quote-left"></i>
                  <p>
                    <a href="{{ url('isiberita') }}">Ini adalah Judul dari beritanya</a>
                  </p>
                  <span>– James Branch</span>
                </blockquote>
              </div>
            </div>  --><!-- end entry item --> 

            <!-- video post -->
            <div class="entry-item">
              <div class="entry-video video-wrap">
                <iframe width="640" height="360" src="https://www.youtube.com/embed/1Yb6O79GKb4" allowfullscreen></iframe>
              </div>

              <div class="entry-date hidden-sm hidden-xs">
                <span>11</span>
                <span>MAR</span>                    
              </div>

              <div class="entry-title">
                <h2>
                  <a href="{{ url('berita') }}">VIDEO YOUTUBE : Nadiem Makarim, CEO & Founder Gojek Indonesia, Inspirasi sukses</a>
                </h2>
              </div>

              <ul class="entry-meta">
                <li class="entry-date">
                  <a href="#">11 March, 2018</a>
                </li>
                <li class="entry-author">
                  by <a href="#">Iqbal Buchori</a>
                </li>
                <li class="entry-category">
                  in <a href="#">Programmer</a>
                </li>
                <li>
                  <a href="{{ url('isiberita') }}" class="entry-comments">10 Comments</a>
                </li>               
              </ul>

              <div class="entry">             
                <div class="entry-content">
                  <br>
                  <!-- <a href="{{ url('isiberita') }}" class="read-more">Selengkapnya</a>
                  <i class="icon arrow_right"></i> -->
                </div>
              </div>
            </div> <!-- end entry item -->

            <!-- Pagination -->
            <!-- <nav class="pagination clear text-center">
              <i class="icon arrow_left"></i>
                <a href="#">Prev</a>
              <span class="page-numbers current">1</span>
                <a href="#">2</a>
                <a href="#">3</a>
                <span class="pagination-dots">...</span>
                <a href="#">10</a>
                <a href="#">Next</a>
                <i class="icon arrow_right"></i>
            </nav> -->

          </div> <!-- end col -->
          
          <!-- sidebar -->
          <div class="col-sm-4 sidebar blog-sidebar">

            <!-- <form role="form" class="relative">
              <input type="search" class="searchbox" placeholder="Search">
                <button type="submit" class="search-button"><i class="icon icon_search"></i></button>
              </form>
 -->
              <!-- Categories -->

            <div class="widget latest-posts">
              <h3 class="widget-title">Recent Posts</h3>
              <ul>
                <li class="clearfix">
                  <a href="{{ url('berita') }}">
                    <img src="img/blog/latest_posts_1.jpg" alt="">
                    Ini adalah Judul dari beritanya.
                    <div class="entry-meta">
                      <span class="entry-date">12 March, 2018</span>
                    </div>
                  </a>
                </li>
                <li class="clearfix">
                  <a href="{{ url('berita') }}">
                    <img src="img/blog/latest_posts_2.jpg" alt="">
                    Ini adalah Judul dari beritanya.
                    <div class="entry-meta">
                      <span class="entry-date">12 March, 2018</span>
                    </div>
                  </a>
                </li>
                <li class="clearfix">
                  <a href="{{ url('berita') }}">
                    <img src="img/blog/latest_posts_3.jpg" alt="">
                    Ini adalah Judul dari beritanya.
                    <div class="entry-meta">
                      <span class="entry-date">12 March, 2018</span>
                    </div>
                  </a>
                </li>
              </ul>
            </div>

            <!-- Tags -->
            <div class="widget tags">
              <h3 class="widget-title">Tags</h3>
              <a href="#">Lorem Ipsum</a>
              <a href="#">Lorem Ipsum</a>
              <a href="#">Lorem Ipsumt</a>
              <a href="#">Lorem Ipsum</a>
              <a href="#">Lorem Ipsum</a>
              <a href="#">Lorem Ipsum</a>
              <a href="#">Lorem Ipsum</a>
              <a href="#">Lorem Ipsum</a>
              <a href="#">Lorem Ipsum</a>
            </div>

          </div> <!-- end col -->
  
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end blog standard -->

<!-- FOOTER -->
    <footer>
      <div class="bottom-footer">
        <div class="container">
          <div class="row">

            <div class="col-sm-6 col-xs-12 copyright">
              <span>
               © 2018 KAHMIPRENEUR  |  Made by <a href="http://gjidigital.com">Global Jaring Indonesia</a>
              </span>
            </div>
              
            <div class="col-sm-4 col-sm-offset-2 col-xs-12 footer-socials">
              <div class="social-icons clearfix right">
                <a href="https://twitter.com/kahmiPreneur"><i class="fa fa-twitter"></i></a>
                <a href="https://facebook.com/kahmipreneur"><i class="fa fa-facebook"></i></a>                  
                <a href="https://instagram.com/kahmipreneur"><i class="fa fa-instagram"></i></a>
            </div>

          </div>
        </div>
      </div> <!-- end bottom footer -->
    </footer> <!-- end footer -->

    <div id="back-to-top">
      <a href="#top"><i class="fa fa-angle-up"></i></a>
    </div>

  </div> <!-- end main-wrapper -->
  
  <!-- jQuery Scripts -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/plugins.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>

</body>
</html>
