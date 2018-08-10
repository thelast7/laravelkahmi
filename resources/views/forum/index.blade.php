@extends('layouts.main2')

@section('title', 'Forum')

@section('content')
<div class="container">
  <div class="jumbotron" id="tc_jumbotron">
    <div class="card-body" id="xx" style="color: #fff;     border:1px solid #fff;">
        <div class="text-center"> 
           <h3 style="    font-size: 2rem;">FORUM KAHMIPRENEUR</h3> 
        <p>Forum tanya jawab. Membantu, Mencari Solusi Dalam Mengembangkan Usaha</p>  
          </div>
        </div> 
      </div> 
    </div>  
        <div class="container"> 
            <div class="row">
              <div class="col-md-12" id="tc_container_wrap">
                <div class="card" id="tc_paneldefault"> 
                  <div class="card-body" id="tc_panelbody"  style="background: #f9f9f9;">

                    <div class="container">
                         <div class="container" style="background-color: #1d4242;">
                            <div class="menu_a text-center">
                            <a href="{{ url('/') }}">HOME</a>
                            <a href="{{ url('about') }}">KAHMIPRENEUR</a>
                            <a href="{{ url('movie') }}">GALERI</a> 
                            <a href="{{ url('berita') }}">BERITA</a> 
                            <a href="{{ url('inspirasi') }}">INSPIRASI</a>
                            <a href="{{ url('forum') }}">FORUM</a>
                            <a href="{{ route('profile.index') }}">{{ Auth::user()->name }}</a>
                            </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8 table-responsive-md" style="    padding-right: 0;"><br>
                      <table class="table table-bordered" style="background-color: #1d4242;">
                      <thead id="tc_thead">
                        <tr>
                          <th>Diskusi</th>
                          {{-- <th>Komentar</th> --}}
                          <th>Views</th>
                          <th>Dibuat</th>
                        </tr>
                      </thead>
                        <tbody style="background: #f9f9f9;">

                          @foreach($forums as $forum)
                          <tr> 
                            <td>

                              <div class="forum_title">
                                <h4><a href="{{route('forumslug', $forum->slug)}}">{{str_limit($forum->title, 40)}}</a></h4>
                                  <p>{!!str_limit($forum->description, 30)!!}</p>
                                @foreach($forum->tags as $tag)
                                  <a href="#" class="badge badge-success tag_label">{{$tag->name}}</a>
                                @endforeach
                                @if(empty($forum->image))
                                @else
                                  <div class="badge badge-success tag_label_image"><i class="fa fa-image"></i></div>
                                @endif
                              </div>

                            </td>
                            {{-- <td  style="text-align: center">{{$forum->comments_count}}</td> --}}
                            <td  style="text-align: center">{{$forum->Views->count()}}</td>
                            <td>

                              <div class="forum_by">
                                <small style="margin-bottom: 0; color: #666">{{ date('j F Y', strtotime($forum->created_at)) }}
                                by <a href="#">{{ $forum->user['name'] }}</a>
                                {{-- by <a href="#">{{$forum->user->name}}</a> --}}

                              </div>
                            </td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                 <!-- pagination -->
                      <div class="row justify-content-center">
                      {!! $forums->links() !!}
                      </div>
                      </div>
                        <div class="col-md-4"> <br>
                  <a href="{{route('forum.create')}}" class="btn btn-success btn-block">Buat Diskusi</a><br>
@include('layouts.popular')
{{-- @include('layouts._permasalahan') --}}
                        </div>

                    </div>
                <hr style="margin-top: 0;"> 
                <div class="card">
                  <div class="card-header"></div>
                    <div class="card-body" style="background: rgb(90, 90, 90)"></div>
                      <div class="card-header"></div>
                </div>
            </div>
          </div>
        </div>
    </div>
</div><br><br>
@endsection
