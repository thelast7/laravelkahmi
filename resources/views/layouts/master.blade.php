	@include('layouts.partials.header-top')
	<!-- Partial Header -->
	@include('layouts.partials.header-nav')

  <div class="main-wrapper-mp oh">

    <!-- Revolution Partial Slider -->
	@include('layouts.partials.slider')
    <!-- Our Services -->



  <section class="section-wrap bg-light pb-mdm-50 pb-130" id="services">
      <div class="container">
      <div class="row heading">
          <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center bottom-line">KAHMIPRENEUR</h2>
            <p class="subheading text-center">Sebuah konsep, gagasan, dan ide untuk menjawab berbagai 
  isu yang berkembang di Indonesia terkait dengan KAHMI, diantaranya:</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="service-item-box icon-effect-1 icon-effect-1a text-left">
              <a href="#">
                <i class="icon icon-Star hi-icon"></i>
              </a>
              <h3>Great Design</h3>
              <p>Kritik terhadap KAHMI yang lebih banyak berpolitik, sehingga gagasan KAHMI 
  Entrepreneur adalah gerakan merubah mindset dari pencari lapangan kerja 
  menjadi pencipta lapangan kerja;<br><br><br></p>     
            </div>            
          </div> <!-- end service item -->

          <div class="col-md-6">
            <div class="service-item-box icon-effect-1 icon-effect-1a text-left">
              <a href="#">
                <i class="icon icon-Layers hi-icon"></i>
              </a>
              <h3>Perfect Coding</h3>
              <p>Jawaban atas tuntutan publik dalam melahirkan 
  wirausaha baru agar Indonesia memiliki wirausaha lebih banyak lagi seperti yang 
  disyaratkan untuk menjadi negara maju. Maka negara tersebut harus memiliki 
  entrepreneur minimal 2% dari total populasi penduduknya.</p>     
            </div>            
          </div> <!-- end service item -->

          <div class="col-md-6">
            <div class="service-item-box icon-effect-1 icon-effect-1a text-left">
              <a href="#">
                <i class="icon icon-Chart hi-icon"></i>
              </a>
              <h3>Marketing</h3>
              <p>Program ini adalah upaya untuk merubah mindset alumni HMI dari political oriented 
  menjadi entrepreneur oriented;</p>     
            </div>            
          </div> <!-- end service item -->

          <div class="col-md-6">
            <div class="service-item-box icon-effect-1 icon-effect-1a text-left">
              <a href="#">
                <i class="icon icon-User hi-icon"></i>
              </a>
              <h3>Marketing</h3>
              <strong><p>Konsep ini sangat tepat untuk menjawab tingginya bonus demografi (angkatan 
  kerja produktif) Indonesia 2020.</p></strong>
            </div>            
          </div> <!-- end service item -->
          
        </div>
      </div>
    </section>

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
