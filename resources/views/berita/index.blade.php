@extends('layouts.master-two')   
@section('content')
    <!-- Blog Standard -->
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
    </section>

    <section class="section-wrap blog-standard">
      <div class="container relative">
        <div class="row">

          <!-- content -->
          <div class="col-sm-8 blog-content">
          @foreach($berita as $ber)
            <!-- standard post -->
            <div class="entry-item">
              <div class="entry-img">
                <a href="{{ route('isiberita', $ber->slug) }}">
                  <img src="img/post/{{ $ber->image }}" alt="">
                </a>
              </div>

              <div class="entry-date hidden-sm hidden-xs">
                <span>{{ $ber->TanggalAt }}</span>
                <span>{{ $ber->BulanAt }}</span>                    
              </div>

              <div class="entry-title">
                <h2>
                  <a href="{{ route('isiberita', $ber->slug) }}">{{ $ber->title }}</a>
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
                  <a href="{{ route('isiberita', $ber->slug) }}" class="entry-comments">Komentar Anda</a>
                </li>               
              </ul>

              <div class="entry">
                <div class="entry-content">
					       {!! substr($ber->body,0, 200) !!}{!! strlen($ber->body) > 200 ? "..." : "" !!}
                  <br>
                  <a href="{{ route('isiberita', $ber->slug) }}" class="read-more">Selengkapnya</a>
                  <i class="icon arrow_right"></i>
                </div>
              </div>
            </div> <!-- end entry item -->
            @endforeach
		
            <!-- Pagination --> 
            <nav class="flat-pagination">
				{!! $berita->links() !!}
            </nav> 

          </div> <!-- end col -->
          
          <!-- sidebar -->
          <div class="col-sm-4 sidebar blog-sidebar">
              <!-- Categories -->
            <div class="widget latest-posts">
              <h3 class="widget-title">Recent Posts</h3>
              <ul>
                @foreach($berita->slice(0,3) as $ber)
                <li class="clearfix">
                  <a href="{{ route('isiberita', $ber->slug) }}">
                    <img src="img/post/{{ $ber->image }}" alt="">
                      <br>
                        <br>
                          <div class="entry-date">{{ $ber->created_at }}</div>
                            <div class="clearfix">
                              <div class="entry-content">
                              {{ $ber->title }}
                              <br>
                              <a href="{{ route('isiberita', $ber->slug) }}"></a>
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
