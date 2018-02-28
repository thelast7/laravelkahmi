@extends('layouts.master')
@section('content')
	<!-- ini taruh di file lain aja trus di include kan di sini include('blogs.quote') -->
<<<<<<< HEAD
=======
	  <section class="section-wrap bg-light pb-mdm-50 pb-130" id="services">
      <div class="container">
      <div class="row heading">
          <div class="col-md-6 col-md-offset-3">
            <h1 class="text-center bottom-line">KAHMIPRENEUR</h1>
            <h1 class="subheading text-center">Sebuah konsep, gagasan, dan ide untuk menjawab berbagai 
  isu yang berkembang di Indonesia terkait dengan KAHMI, diantaranya:</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="service-item-box icon-effect-1 icon-effect-1a text-center">
              <a href="#">
                <i class="icon icon-Star hi-icon icon-center"></i>
              </a>
              <h3>PENCIPTA LAPANGAN KERJA</h3>
              <p>Kritik terhadap KAHMI yang lebih banyak berpolitik, sehingga gagasan KAHMI 
  Entrepreneur adalah gerakan merubah mindset dari pencari lapangan kerja 
  menjadi pencipta lapangan kerja;
<br>
<br>
<br>
<br>
<br></p>     
            </div>            
          </div> <!-- end service item -->

          <div class="col-md-6">
            <div class="service-item-box icon-effect-1 icon-effect-1a text-center">
              <a href="#">
                <style>
                 p {
                  text-align:justify;
                }
              </style>
                <i class="icon icon-Users hi-icon"></i>
              </a>
              <h3>Wirausaha Yang tangguh</h3>
              <p>Sarana membangun SINERGI antara perbankan, pemasaran, teknologi, manajemen sebagai jawaban atas tuntutan publik dalam melahirkan 
  menciptakan wirausaha yang tangguh dalam melahirkan wirausaha baru agar Indonesia memiliki wirausaha lebih banyak lagi seperti yang disyaratkan untuk menjadi negara maju. Maka negara tersebut harus memiliki 
  entrepreneur minimal 2% dari total populasi penduduknya.</p>     
            </div>            
          </div> <!-- end service item -->

          <div class="col-md-6">
            <div class="service-item-box icon-effect-1 icon-effect-1a text-center">
              <a href="#">
                <i class="icon icon-Bulb hi-icon"></i>
              </a>
              <h3>Enterpreneur Oriented</h3>
              <p>Program ini adalah upaya untuk merubah mindset alumni HMI dari political oriented 
  menjadi entrepreneur oriented;</p>     
            </div>            
          </div> <!-- end service item -->

          <div class="col-md-6">
            <div class="service-item-box icon-effect-1 icon-effect-1a text-center">
              <a href="#">
                <i class="icon icon-Edit hi-icon"></i>
              </a>
              <h3>Konsep yang tepat</h3>
              <strong><p>Konsep ini sangat tepat untuk menjawab tingginya bonus demografi (angkatan 
  kerja produktif) Indonesia 2020.</p></strong>
            </div>            
          </div> <!-- end service item -->
          
        </div>
      </div>
    </section>
>>>>>>> 99c5f59307a2b05afcbcb2150f8aba767e9478f9

    <section class="section-wrap bg-light from-blog" id="blog">
      <div class="container"> 
        <div class="row heading">
          <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center bottom-line">ENTREPRENEUR NEWS</h2>
            <p class="subheading text-center">Our Latest News</p>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div id="owl-blog" class="owl-carousel owl-theme">
				@foreach($blogs as $blog)
              <div class="blog-col">
                <div class="entry-img">
                  <!-- <a href="about">
                    <img src="img/blog_1.jpg" alt="">
                  </a> -->
                </div>
                <div class="entry-box">
                  <div class="entry-title">
                    <h4><a href="{{ route('isiberita', $blog->slug) }}">{{ $blog->title }}</a></h4>
                  </div>
                  <ul class="entry-meta">
                    <li>by <a href="{{ route('isiberita', $blog->slug) }}">{{ $blog->author->name }}</a></li>
                    <li>
                      <a href="#">July 10, 2015</a>
                    </li>                   
                  </ul>
                  <div class="entry-content">
                    <p>
					{!! substr($blog->body,0, 200) !!}{!! strlen($blog->body) > 200 ? "..." : "" !!}

                    </p>
                    <a href="{{ route('isiberita', $blog->slug) }}" class="read-more">Selengkapnya</a>
                     <i class="icon arrow_right"></i>
                  </div>
                </div>
              </div> <!-- end post -->
				@endforeach
            </div>
          	{!! $blogs->links() !!} 
          </div> <!-- end row -->
        </div>
      </div>
    </section> <!-- end from blog -->
@endsection
@push('scripts')
<script>
$(document).ready(function() {
	$(".pagination").addClass("text-center clearfix customNavigation mt-40");
	$(".mt-40").removeClass("pagination");
})
</script>
@endpush
