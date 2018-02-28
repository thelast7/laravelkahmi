@extends('layouts.master-two')   
@section('content')

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
    </section> <!-- end page title -->

   <!-- Blog Single -->
   <section class="section-wrap-mp">
      <div class="container relative">
        <div class="row">
          
          <!-- content -->
          <div class="col-sm-12 blog-content">
            <!-- standard post -->
                <div class="col-sm-10 col-sm-offset-1">
                  <div class="entry-title">
                    <h2>{{ $isiberita->title }}</h2>
                  </div>
                    <ul class="entry-meta bottom-line">
                      <li class="entry-date">
                        <a href="#">{{ $isiberita->created_at }}</a>
                      </li>
                      <li class="entry-author">
                        by <a href="#">{{ $isiberita->author->name }}</a>
                      </li>
                      <li class="entry-category">
                        in <a href="#">{{ $isiberita->category_id }}</a>
                      </li>               
                    </ul>

                  <div class="entry">
                    <div class="entry-content">
                      <span class="dropcap style-2">{{ substr ($isiberita->title,0,1) }}</span>
                        {{ $isiberita->title }}
                        {!! $isiberita->body !!}
                    </div> <!-- end share -->
                    </div>
                  </div> <!-- end entry -->
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
