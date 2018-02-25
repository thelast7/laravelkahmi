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
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/font-icons.css')}}" />
  <link rel="stylesheet" href="{{ asset('revolution/css/settings.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/rev-slider.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/sliders.css')}}">
  <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/responsive.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/spacings.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/animate.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/color.css')}}" />

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

  <!-- Partial Header -->
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
                  <a href="welcome">
                    <img class="logo" src="{{ asset('img/logo_dark.png')}}" alt="logo">
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

              <li id="mobile-search">
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
                  </li> 
              </div> <!-- end collapse -->
            </div> <!-- end col -->
            
          </div> <!-- end row -->
        </div> <!-- end container -->
      </div> <!-- end navigation -->
    </nav> <!-- end navbar -->
  </header>


  <div class="main-wrapper-mp oh">

    <section class="page-title style-2">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1>KAHMIPRENEUR NEWS</h1>
            <ol class="breadcrumb">
              <li>
                <a href="welcome">Home</a>
              </li>
              <li class="active">
                Berita
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section> <!-- end page title -->

   <!-- Blog Single -->
   <section class="section-wrap-mp">
      <div class="container relative">
        <div class="row">
          
          <!-- content -->
          <div class="col-sm-12 blog-content">

            <!-- standard post -->
              <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                  
                  <div class="entry-title">
                    <h2>{{ $isiberita->title }}</h2>
                  </div>
                  <ul class="entry-meta bottom-line">
                    <li class="entry-date">
                      <a href="#">{{ $isiberita->created_at }}</a>
                    </li>
                    <li class="entry-author">
                      by <a href="#">{{ $isiberita->author->name }}</a>
                    </li>
                    <li class="entry-category">
                      in <a href="#">{{ $isiberita->categery_id }}</a>
                    </li>
                    <li>
                      <a href="about" class="entry-comments">10 Comments</a>
                    </li>               
                  </ul>

                  <div class="entry">
                    <div class="entry-content">
                      <span class="dropcap style-2">{{ substr ($isiberita->title,0,1) }}</span>
                          {{ $isiberita->title }}
                          <br>
                          <br>
                          <!-- blockquote post -->
                  <div class="entry-item">
                    <div class="entry blockquote mt-0">             
                      <blockquote class="blockquote-style-1 text-center mb-0">
                        <i class="fa fa-quote-left"></i>
                        
                          Dari Al-Miqdam bin Ma’di karib RA.: Nabi Shallallahu ‘Alaihi Wa Sallam bersabda, “tidak ada
                          makanan yang lebih baik dari seseorang kecuali makanan yang ia peroleh dari uang hasil keringatnya sendiri. Nabi Allah, Daud AS. makan dari hasil keringatnya sendiri.”
                          <br> 
                        <span>(H.R. Al-Bukhori)</span>
                        <i class="fa fa-quote-left"></i>
                      </blockquote>
                    </div>
                  </div> <!-- end entry item -->


                        {{ $isiberita->body }}
                      <br>
                      <br>
                      <div class="entry-share">
                      <h6>Wilayah Perdagangan yang dikunjungi Rasulullah Shallallahu ‘Alaihi Wa Sallam</h6>
                <div class="entry-img">
                    <img src="img/post/{{ $isiberita->image }}" alt="M.Taufiq-Majelis Wilayah DKI Jakarta">
                </div>
                        <br>
                        <br>
                        Wilayah perdagangan yang dikunjungi Nabi Muhammad SAW meliputi Yaman, Syria, Busra, Iraq,
                        Yordania, Bahrain, dan kota-kota perdagangan di Jazirah Arab lainnya. Menurut satu riwayat,
                        sebelum menikah, beliau menjadi manajer perdagangan Khadijah RA ke pusat perdagangan
                        di Yaman. Nabi Muhammad pun empat kali memimpin ekspedisi perdagangan ke Syria dan
                        Jerash di Yordania. Pusat perdagangan dan turisme Jerash Festival (Mahrajan Jerash) saat ini
                        Pusat perdagangan dan turisme Jerash Festival (Mahrajan Jerash) saat ini.

                      <div class="row mt-30">
                        <div class="col-md-8">
                          <div class="entry-tags">
                            <h6>Tags:</h6>
                            <a href="#">Entrepreneur</a>,
                            <a href="#">Mahasiswa</a>,
                            <a href="#">Lorem</a>,
                            <a href="#">Ipsum</a>
                          </div>
                        </div> <!-- end tags -->

                        <div class="col-md-4 clearfix">
                          <div class="entry-share">
                            <h6>Share:</h6>
                            <div class="socials">
                              <a href="#"><i class="fa fa-facebook"></i></a>
                              <a href="#"><i class="fa fa-twitter"></i></a>
                              <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </div>
                      </div> <!-- end share -->

                    </div>
                  </div> <!-- end entry -->

                </div>
              </div> <!-- end row -->

            </div> <!-- end entry item -->
          </div> <!-- end col -->
  
        </div> <!-- end row -->

      </div> <!-- end container -->
    <!-- end blog single -->

    <!-- Comments -->
    <section class="entry-comments section-wrap pt-100 pb-100">
      <div class="container">
        <h4 class="text-center mb-50">3 Comments</h4>

        <ul class="comment-list">
          <li>
            <div class="comment-body">
              <img src="img/blog/comment_1.jpg" class="comment-avatar" alt="">
              <div class="comment-content">
               <!--  <span class="comment-author">Dhea G</span>
                <span><a href="#">July 25, 2015 at 06:15 pm</a></span>    --> 
                  <div id="fb-root"></div>
                                                <script>(function(d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                if (d.getElementById(id)) return;
                                                js = d.createElement(s); js.id = id;
                                                js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.11';
                                                fjs.parentNode.insertBefore(js, fjs);
                                                }(document, 'script', 'facebook-jssdk'));</script>
                                            <div class="fb-comments"></div>
                <!-- <a href="#">Reply</a> -->
              </div>
            </div>

           <!--  <ul class="comment-reply">
              <li>
                <div class="comment-body">
                  <img src="img/blog/comment_2.jpg" class="comment-avatar" alt="">
                  <div class="comment-content">
                    <span class="comment-author">Mustaqim</span>
                    <span><a href="#">July 23, 2015 at 14:48 pm</a></span>    
                    Lorem Ipsum. For over a decade, we've helped businesses to craft honest, emotional experiences through strategy, brand development, graphic design, our team hand picked to provide the right balance of skills to work
                    <br>
                    <a href="#">Reply</a>
                  </div>
                </div>
              </li> --> <!-- end reply comment -->
            <!-- </ul>

          </li> --> <!-- end 1-2 comment -->

          <!-- <li>
            <div class="comment-body">
              <img src="img/blog/comment_3.jpg" class="comment-avatar" alt="">
              <div class="comment-content">
                <span class="comment-author">Kusuma Putri</span>
                <span><a href="#">July 21, 2015 at 09:57 am</a></span>    
                Lorem Ipsum For over a decade, we've helped businesses to craft honest, emotional experiences through strategy, brand development, graphic design, our team hand picked to provide the right balance of skills to work
                <br>
                <a href="#">Reply</a>
              </div>
            </div>
          </li> --> <!-- end 3 comment -->

          <!-- <li>
            <div class="comment-body">
              <img src="img/blog/comment_4.jpg" class="comment-avatar" alt="">
              <div class="comment-content">
                <span class="comment-author">Arif</span>
                <span><a href="#">July 20, 2015 at 14:03 pm</a></span>
                Lorem Ipsum. For over a decade, we've helped businesses to craft honest, emotional experiences through strategy, brand development, graphic design, our team hand picked to provide the right balance of skills to work
                <br>
                <a href="#">Reply</a>
              </div>
            </div>
          </li> --> <!-- end 4 comment -->

        </ul>
      </div>
    </section> <!--  end comments -->

    <!-- Comment form -->
    <section class="section-wrap contact-form pt-100 pb-100">
      <div class="container">

        <h5 class="text-center mb-50">Leave a Comment</h5>

        <div class="row">

          <div class="col-md-6 col-md-offset-3">
            <form id="contact-form" action="#">
              <input name="name" id="name" type="text" placeholder="Name*">
              <input name="mail" id="mail" type="email" placeholder="E-mail*">
              <input name="website" id="website" type="text" placeholder="Website">
              <textarea name="comment" id="comment" placeholder="Comment"></textarea>
              <input type="submit" class="btn btn-lg btn-color btn-submit" value="Submit" id="submit-message">      
              <div id="msg" class="message"></div>
              </form>
          </div> <!-- end col -->

        </div>
      </div>
    </section> <!-- end comment form -->
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
    <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js')}} "></script>
    
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
        </div>
      </div> <!-- end bottom footer -->
    </footer> <!-- end footer -->
</body>
</html>
