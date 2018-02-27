@extends('layouts.master')
@section('content')
	<!-- ini taruh di file lain aja trus di include kan di sini include('blogs.quote') -->
	<section class="section-wrap-mp">
	<div class="container relative">
	<div class="entry-item">
	<div class="entry blockquote mt-0">             
	<blockquote class="blockquote-style-1 text-LEFT mb-0">
	<!--  <i class="fa fa-quote-RIGHT"></i> -->


	<B>KAHMIPRENEUR adalah sebuah konsep, gagasan, dan ide untuk menjawab berbagai 
	isu yang berkembang di Indonesia terkait dengan KAHMI, diantaranya:<B>
	<ul class="bullets">

	<li>Kritik terhadap KAHMI yang lebih banyak berpolitik, sehingga gagasan KAHMI 
	Entrepreneur adalah gerakan merubah mindset dari pencari lapangan kerja 
	menjadi pencipta lapangan kerja;</li>
	<li>KAHMI Entrepreneur adalah jawaban atas tuntutan publik dalam melahirkan 
	wirausaha baru agar Indonesia memiliki wirausaha lebih banyak lagi seperti yang 
	disyaratkan untuk menjadi negara maju. Maka negara tersebut harus memiliki 
	entrepreneur minimal 2% dari total populasi penduduknya.</li>
	<li>Program ini adalah upaya untuk merubah mindset alumni HMI dari political oriented 
	menjadi entrepreneur oriented;</li>
	<li>Konsep ini sangat tepat untuk menjawab tingginya bonus demografi (angkatan 
	kerja produktif) Indonesia 2020.</li>
	</ul>

	<!-- <i class="fa fa-quote-left"></i> -->
	</blockquote>
	</div>
	</div>
	</div>
	</section>

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
                    <h4><a href="about">{{ $blog->title }}</a></h4>
                  </div>
                  <ul class="entry-meta">
                    <li>by <a href="about">{{ $blog->author->name }}</a></li>
                    <li>
                      <a href="#">July 10, 2015</a>
                    </li>                   
                  </ul>
                  <div class="entry-content">
                    <p>
					{!! $blog->body !!}
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
