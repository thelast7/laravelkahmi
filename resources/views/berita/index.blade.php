@extends('layouts.master-two')   
@section('content')
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
            	<div class="entry-item"> 
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

            <!-- video post 
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
                  <a href="" class="read-more">Selengkapnya</a>
                  <i class="icon arrow_right"></i> 
                </div>
              </div>
            </div>  end entry item -->

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
@endsection
