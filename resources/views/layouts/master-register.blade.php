@include('layouts.partials.header-top')

  <!-- Partial Header -->
@include('layouts.partials.header-nav')

  <div class="main-wrapper-mp oh">

		@yield('content')

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

    <div id="back-to-top">
      <a href="#top"><i class="fa fa-angle-up"></i></a>
    </div>

  </div> <!-- end main-wrapper -->
 @include('layouts.partials.footer-bottom') 
