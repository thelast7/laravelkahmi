@extends('layouts.master')
@section('content')

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
                  <a href="about">
                  	<img src="img/post/{{ $blog->image }}" alt="">
                  </a> 
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
