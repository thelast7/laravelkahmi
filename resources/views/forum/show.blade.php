@extends('layouts.main2')
@section('title',"$forums->title")
@section('content')
<div class="container">
  <div class="jumbotron" id="tc_jumbotron">
    <div class="card-body" id="xx">
        <div class="tc_head_title"> 
           <h2 style="color: #fff;">{{$forums->title}}</h2>  
        </div>
    </div>
  </div>
</div>  
<div class="container">
    <div class="row">
        <div class="col-md-12" id="tc_container_wrap">
            <div class="card" id="tc_paneldefault" style="background: #f9f9f9;"> 
                <div class="card-body" id="tc_panelbody">
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
                    </div><br>
                    <div class="row">
                        <div class="col-md-8">
                          <div class="card">
                             <div class="card-body" style="background: #f9f9f9;"> 
                      <div class="forum_info">
                     {{-- <div class="share pull-right">
                      <a href="#">  <i class="fa fa-facebook"></i></a>
                      <a href="#">  <i class="fa fa-twitter"></i></a>
                      <a href="#">  <i class="fa fa-google-plus"></i></a>
                      </div> --}}
                    <a href="#" class="badge badge-success">{{ $forums->user['name'] }}</a> |
                    {{-- <small>{{$forums->created_at->diffForHumans()}}</small> | --}}
                    <small>{{ date('j F Y, h:ia', strtotime($forums->created_at)) }}</small> |
                    <small>{{$forums->Views->count()}} Views</small> |
                    <small>{{$forums->comments->count()}} Komentar</small> |
                    @foreach($forums->tags as $tag)
                    <div class="badge badge-success">#{{$tag->name}}</div>
                    @endforeach
                    @if (empty($forums->image))
                            @else
                          <div class="badge badge-success"><i class="fa fa-image"></i></div>
                           @endif
                    <h3>{{$forums->title}}</h3> 
                  </div>
                  <hr style="margin-top: 0; margin-bottom: 5px;">
                  <div class="forum_description">
                  @if (empty($forums->image))
                        @else
                        <br>
                    <div class="tc_if_empty">
                   <a data-toggle="collapse" data-target="#open_modal"><i class="fa fa-image" id="zoom_image"></i></a>
                <div id="open_modal" class="collapse"> 
                  <div class="bg">
                    <img src="{{asset('images/'.$forums->image)}}" alt="">
                    <div class="overlay">
                     <a href="#myModal" data-toggle="modal" data-target="#myModal"><h2>Zoom</h2> </a> 
                    </div>
                  </div>
                    </div>
                    </div>  
                       @endif
                    <p>{!!$forums->description!!}</p>
                  </div>
                </div>
              </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" id="modal_img">
                 <img src="{{asset('images/'.$forums->image)}}" alt="">
                  </div> 
                </div>
              </div>
            </div>
            @forelse($forums->comments as $comment)
            <div class="card">
              <div class="card-header" style=" background-color: #2ab27b; color: #fff; border-top-right-radius: 0px; border-top-left-radius: 0px;"><i class="fa fa-clock-o" style="color: #eee"></i> <small style="color: #eee">{{ date('j F Y, h:ia', strtotime($forums->created_at)) }}</small></div>
              <div class="card-body" style="background: #f9f9f9; "> 
                <div class="row">
{{--                   <div class="col-md-3" id="img_comment">
                    <img src="{{asset('images/pr0file.png')}}" width="100%"> --}}
                    <br>
                    <div class="comment_user">
                    <b>{{$comment->user->name}}</b>
                    </div>
                  {{-- </div> --}}
                  <div class="col-md-8">
                  {{$comment->content}}
                  </div>
                </div>
            </div>
            <div class="card-footer link_a">
              <div class="info_comment">
               <a data-toggle="collapse" href="#{{$comment->id}}-collapse1info"><i class="fa fa-info-circle"></i> Info</a>
              </div>
             <div class="reply_comment">
             <a data-toggle="collapse" href="#{{$comment->id}}-collapse1reply"><i class="fa fa-comment-o"></i> Reply</a>
             </div>
            </div>
             <div id="1-collapse1info" class="card-collapse collapse">
                  <div class="card-body">*Klik 'Reply' untuk melihat atau membuat komentar balasan.</div> 
                </div>
             <div id="{{$comment->id}}-collapse1reply" class="card-collapse collapse">
              <div class="card-body">
                <!-- forelse reply-->
              @forelse($comment->comments as $reply)
              <div class="card">
                  <div class="card-header" style="background-color: #2ab27b; color: #fff; border-top-right-radius: 0px; border-top-left-radius: 0px;"><i class="fa fa-clock-o" style="color: #eee"></i> <small style="color: #eee">{{ date('j F Y, h:ia', strtotime($comment->created_at)) }} </small></div>
                  <div class="card-body" style="background: #f9f9f9;"> 
                    <div class="row">
                  <div class="col-md-8">
                  {{$reply->content}}
                  </div>
{{--                    <div class="col-md-3" id="img_comment_reply">
                    <img src="{{asset('images/pr0file.png')}}" width="100%"> --}}
                    <br>
                    <div class="comment_user">
                    <b>{{$reply->user->name}}</b>
                    </div>
                  {{-- </div> --}}
                </div>
                </div>
                </div>
              @empty
              <br>

              <p>Belum ada balasan komentar</p>

              @endforelse

               </div>
                  <div class="panel-body" style="    border-top: 1px solid #eee;">
                    <form action="{{ route('replyComment', $comment->id) }}" method="post" style="    padding: 0 16px;">
                  {{csrf_field()}}
                  <div class="form-group">
                  <input type="text" name="content" class="form-control" id="input_reply" placeholder="Reply here..">        
                  </div>
                  <button class="btn btn-success" type="submit">Submit</button>
                  </form>
                  </div>
                </div>
              </div>
              @empty
              <br>

              <p>Belum ada komentar</p>

              @endforelse
            <!-- endforelse -->
            <hr>

            <br>
            <hr>
            <div class="panel panel-default" style="background-color: #f9f9f9;">
              <div class="panel-body">

                {{-- <div class="add_comment"> --}}
{{--                   <div class="open_comment">
                      <div class="h1"><h4>Tambahkan<br>Komentar</h4></div>
                  </div> --}}

                  <div>
                    <form action="{{route('addComment', $forums->id)}}" method="post">
                      {{csrf_field()}}
                      <div class="form-group">
                        <input type="text" name="content" id="Your-Answer" placeholder="Tambahkan Komentar" required="required">
                        <label for="Your-Comment">Komentar Anda:</label>

                      </div>
                      <div class="button-gg"> 
                        <button class="btn btn-success" type="submit">Submit</button>
                      </div>
                    </form>
                  </div>
                {{-- </div> --}}
              </div>
            </div>
            </div>
               <div class="col-md-4">
                  <a href="{{route('forum.create')}}" class="btn btn-success btn-block">Buat Diskusi</a><br>
                  @if(auth()->user()->id == $forums->user_id)
                  <a href="{{ route('forum.edit', $forums->id) }}" class="btn btn-success btn-block"><i class="fa fa-pencil"></i> Edit Diskusi</a><br>

                    <form action="{{ route('forum.destroy', $forums->id) }}" method="post">
                      {{csrf_field()}}
                      {{method_field('delete')}}
                      <button class="btn btn-danger btn-block" onclick="return confirm('Apakah kamu yakin ingin Menghapus diskusi ini')" ><i class="fa fa-trash-o"></i> Hapus</button>
                    </form>
                  @endif

                @include('layouts.popular')
            </div>
            </div>
            <hr style="margin-top: 0;">
              </div>
            </div>
           </div>
          </div>
      </div><br>
@endsection

<!-- css -->

<style type="text/css">
input {
  font-family: inherit;
  -webkit-appearance: none;
  -moz-appearance: none;
  border: 0;
  border-bottom: 1px solid #AAAAAA;
  font-size: 16px;
  color: #000;
  border-radius: 0;
}
input[type="text"],
input[type="password"] {
  width: 100%;
  height: 40px;
      background: transparent;
}
button,
input:focus {
  outline: 0;
}
::-webkit-input-placeholder { 
  font-size: 16px;
  font-weight: 300;
  letter-spacing: -0.00933333em;
}
.form-group {
  position: relative;
  padding-top: 15px;
  margin-top: 10px;
}
label {
  position: absolute;
  top: 0;
  opacity: 1;
  -webkit-transform: translateY(5px);
          transform: translateY(5px);
  color: #aaa;
  font-weight: 300;
  font-size: 13px;
  letter-spacing: -0.00933333em;
  transition: all 0.2s ease-out;
}
input:placeholder-shown  + label {
  opacity: 0;
  -webkit-transform: translateY(15px);
          transform: translateY(15px);
}
.h1 {
  color: #999;
  opacity: 0.8;
  margin: 0;
  font-size: 15px;
  font-weight: 400;
  transition: all 770ms cubic-bezier(0.51, 0.04, 0.12, 0.99);
  text-align: center;
  cursor: pointer; 
}
.open .h1 {
  -webkit-transform: translateX(200px) translateZ(0);
          transform: translateX(165px) translateZ(0);
}
.h2 {
  color: #000;
  font-size: 20px;
  letter-spacing: -0.00933333em;
  font-weight: 600;
  padding-bottom: 15px;
}
/*.add_comment {
  height:160px;
  border-radius: 4px;
  overflow: hidden;
  position: relative;
}*/
/*.open_comment {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: all 770ms cubic-bezier(0.51, 0.04, 0.12, 0.99);
  overflow: hidden;
}
.open_comment img {
  object-fit: cover;
  width: 100%;
  height: 100%;
  display: block;
  transition: all 770ms cubic-bezier(0.51, 0.04, 0.12, 0.99);
  object-position: left;
}
.open .open_comment img {
  -webkit-transform: translateX(280px) translateZ(0);  
          transform: translateX(280px) translateZ(0);  
}
.open .open_comment {
  -webkit-transform: translateX(-400px) translateZ(0);
          transform: translateX(-400px) translateZ(0);
} */
.comment-show {
  position: absolute;
  top: 0;
  right: 0;
  width: 457px;
  -webkit-transform: translateX(400px) translateZ(0);
          transform: translateX(468px) translateZ(0);
  transition: all 770ms cubic-bezier(0.51, 0.04, 0.12, 0.99);
}
.open .comment-show {
  -webkit-transform: translateX(0px) translateZ(0);
          transform: translateX(0px) translateZ(0);
}
input[type="checkbox"] {
  cursor: pointer;
  margin: 0;
  height: 22px;
  position: relative;
  width: 22px;
  -webkit-appearance: none;
  transition: all 180ms linear;
}
input[type="checkbox"]:before {
    border: 1px solid #aaa;
    background-color: #fff;
    content: '';
    width: 20px;
    height: 20px;
    display: block;
    border-radius: 2px;
    transition: all 180ms linear;
}
input[type="checkbox"]:checked:before {
  background: linear-gradient(198.08deg, #B4458C 45.34%, #E281E7 224.21%);
  border: 1px solid #C359AA;
}
input[type="checkbox"]:after {
  content: '';
  border: 2px solid #fff;
  border-right: 0;
  border-top: 0;
  display: block;
  height: 4px;
  left: 4px;
  opacity: 0;
  position: absolute;
  top: 6px;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
  width: 12px;
  transition: all 180ms linear;
}
input[type="checkbox"]:checked:after {
    opacity: 1;
} 
.button-gg {
  margin-top: 20px;
}
.btn-primary {
  color: #fff;
  background: linear-gradient(198.08deg, #B4458C 45.34%, #E281E7 224.21%);
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
}
.btn-secondary {
  color: #C359AA;  
}
.bg,
.overlay {
  text-align: center;
}
.bg .overlay  a{
  text-decoration: none;
}
img,
.overlay {
  transition: .3s all;
  border-radius: 3px;
}
.bg {
  /*float: left;*/
  max-width: 31%;
  position: relative;
  margin: .5%;
}
.bg img {
  width: 100%;
  margin-bottom: -4px;
}
.bg .overlay {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: 100%;
  background: rgba(0, 0, 0, 0.2);
  color: #fff;
  opacity: 0;
}
.bg .overlay h2 {
  padding-top: 14%;
  color: #fff; 
}
.bg .overlay p {
  font-family: 'Julius Sans One', sans-serif;
}
.bg:hover .overlay {
  opacity: 1;
}
.bg:hover img {
  -webkit-filter: blur(2px);
  filter: blur(2px);
}
@media screen and (max-width: 1148px) {
  .bg {
    max-width: 48%;
    margin: 1%;
  }
}
@media screen and (max-width: 768px) {
  .bg {
    float: none;
    max-width: 80%;
    margin: 1% auto;
  }
}
  
</style>

{{-- @section('js')
<script type="text/javascript">
var openComment = document.querySelector('.h1');
var addComment = document.querySelector('.add_comment');
openComment.addEventListener('click', function(){
addComment.classList.toggle('open'); 
}); 
</script>
@endsection --}}