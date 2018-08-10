@extends('layouts.master-two')   
@section('content')

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
    </section> <!-- end page title -->

   <section class="section-wrap-mp">
      <div class="container relative">
        <div class="row">
          
          <!-- content -->
          <div class="col-sm-12 blog-content">
            <div class="entry-item">
            <!-- standard tipz -->
                <div class="col-sm-10 col-sm-offset-1">
                  
                  <div class="entry-title">
                    <h2>{{ $inspirasikita->title }}</h2>
                  </div>
                  <div class="entry-img">
              
                  <img src="{{ url('/img/tipz/'.$inspirasikita->image) }}">

                  </div>
                    <ul class="entry-meta bottom-line">
                      <li class="entry-date">
                        <a href="#">{{ $inspirasikita->created_at }}</a>
                      </li>
{{--                       <li class="entry-author">
                        by <a href="#">{{ $inspirasikita->author->name }}</a>
                      </li>
                      <li class="entry-category">
                        in <a href="#">{{ $inspirasikita->category_id }}</a>
                      </li>  --}}              
                    </ul>

                  <div class="entry">
                    <div class="entry-content">
                      <!-- {{ substr ($inspirasikita->title,0,2) }}</span> -->
                        <!-- {{ $inspirasikita->title }} -->
                        {!! $inspirasikita->body !!}
                    </div> <!-- end share -->
                    </div>
                  </div> <!-- end entry -->

                </div>
              </div>
              </div> <!-- end row -->
          </div> <!-- end col -->
        </div> <!-- end row -->
      </div> <!-- end container -->
    <!-- end blog single -->

    <!-- Comments -->
    <section class="entry-comments section-wrap pt-100 pb-100">
      <div class="container">
            <div class="comment-body">
              <img src="img/blog/comment_1.jpg" class="comment-avatar" alt="">
              <div class="comment-content">
                  <div id="fb-root"></div>
                      <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.11';
                      fjs.parentNode.insertBefore(js, fjs);
                      }(document, 'script', 'facebook-jssdk'));</script>
                  <div class="fb-comments"></div>
              </div>
            </div>
      </div>
    </section> <!--  end comments -->
@endsection
