@extends('layouts.master-two')   
@section('content')
    <!-- Blog Standard -->
    <section class="page-title style-2">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1>KAHMIPRENEUR INSPIRASI</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{ url('/') }}">Home</a>
              </li>
              <li class="active">
                Inspirasi
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="section-wrap blog-standard">
      <div class="container relative">
        <div class="row">

          <!-- content -->
          <div class="col-sm-8 blog-content">
          @foreach($inspirasi as $insp)
            <!-- standard tipz -->
            <div class="entry-item">
              <div class="entry-img">
                <a href="{{ route('inspirasikita', $insp->slug) }}">
                  <img src="img/tipz/{{ $insp->image }}" alt="">
                </a>
              </div>

              <div class="entry-date hidden-sm hidden-xs">
                <span>{{ $insp->TanggalAt }}</span>
                <span>{{ $insp->BulanAt }}</span>                    
              </div>

              <div class="entry-title">
                <h2>
                  <a href="{{ route('inspirasikita', $insp->slug) }}">{{ $insp->title }}</a>
                </h2>
              </div>
              <ul class="entry-meta">
                <li class="entry-date">
                  <a href="#">{{ $insp->created_at }}</a>
                </li>
                <li>
                  <a href="{{ route('inspirasikita', $insp->slug) }}" class="entry-comments">Komentar Anda</a>
                </li>               
              </ul>

              <div class="entry">
                <div class="entry-content">
					       {!! substr($insp->body,0, 200) !!}{!! strlen($insp->body) > 200 ? "..." : "" !!}
                  <br>
                  <a href="{{ route('inspirasikita', $insp->slug) }}" class="read-more">Selengkapnya</a>
                  <i class="icon arrow_right"></i>
                </div>
              </div>
            </div> <!-- end entry item -->
            @endforeach
		
            <!-- Pagination --> 
            <nav class="flat-pagination">
				{!! $inspirasi->links() !!}
            </nav> 

          </div> <!-- end col -->
          
          <!-- sidebar -->
          <div class="col-sm-4 sidebar blog-sidebar">
              <!-- Categories -->
            <div class="widget latest-posts">
              <h3 class="widget-title">Recent Inspirasi</h3>
              <ul>
                @foreach($inspirasi->slice(0,3) as $insp)
                <li class="clearfix">
                  <a href="{{ route('inspirasikita', $insp->slug) }}">
                    <img src="img/tipz/{{ $insp->image }}" alt="">
                      <br>
                        <br>
                          <div class="entry-date">{{ $insp->created_at }}</div>
                            <div class="clearfix">
                              <div class="entry-content">
                              {{ $insp->title }}
                              <br>
                              <a href="{{ route('inspirasikita', $insp->slug) }}"></a>
                              </div>                      
                            </div>
                    </a>
                    @endforeach
                </li>
              </ul>
            </div>

            <!-- Tags -->
            <!-- <div class="widget tags">
              <h3 class="widget-title">Tags</h3>
              <a href="#">Lorem Ipsum</a>
              <a href="#">Lorem Ipsum</a>
              <a href="#">Lorem Ipsum</a>
              <a href="#">Lorem Ipsum</a>
              <a href="#">Lorem Ipsum</a>
              <a href="#">Lorem Ipsum</a>
              <a href="#">Lorem Ipsum</a>
              <a href="#">Lorem Ipsum</a>
              <a href="#">Lorem Ipsum</a>
            </div> -->

          </div> <!-- end col -->
  
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end blog standard -->
@endsection
