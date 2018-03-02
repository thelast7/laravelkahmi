	@include('layouts.partials.header-top')
	<!-- Partial Header -->
	@include('layouts.partials.header-nav')

  <div class="main-wrapper-mp oh">

    <!-- Revolution Partial Slider -->
	@include('layouts.partials.slider')
    <!-- Our Services -->

    <!-- From Blog Content -->
	@yield('content')
	<!-- End Blog -->

    <!-- Footer Type-2 -->
	@include('layouts.partials.footer')

    <div id="back-to-top">
      <a href="#top"><i class="fa fa-angle-up"></i></a>
    </div>

  </div> <!-- end main-wrapper -->
  
	@include('layouts.partials.footer-bottom')
