@extends('layouts.main2')

@section('title', 'Edit Diskusi')

@section('content')

{{-- @if(auth()->user()->id == $forum->user_id) --}}

<div class="container">
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
    <div class="jumbotron" id="tc_jumbotron">
      <div class="col-md-8 offset-md-2">
        <div class="text-center"><h3 style="color: #fff;">Edit Pertanyaan</h3></div><hr style="background: #fff"> 
      </div>
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                  <form action="{{route('forum.update', $forum->slug)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                  <div class="form-group">
                      <input type="text" name="title" class="form-control" value="{{$forum->title}}">
                  </div>
                  <div class="form-group">
                      <textarea type="text" name="description" class="form-control" placeholder="Description..">{{$forum->description}}</textarea>
                  </div> 

                  <div class="form-group">
                    <select name="tags[]" multiple="multiple" class="form-control tags">
                        @foreach($tags as $tag)
                          <option value="{{$tag->id}}">{{$tag->name}}</option>
{{--                           <option value="{{ $tag->id }}"
                            @if ($tag->id === $forum->id)
                              selected 
                            @endif>
                            {{ $tag->name }}
                          </option> --}}
                        @endforeach
                    </select>
                  </div>      
                  <a data-toggle="collapse" data-target="#edit_image"><i class="fa fa-image" id="upload_image"></i></a>
                    <div id="edit_image" class="collapse">  
                        <div class="bg">
                          <div class="form-group">
                             <input type="file" class="form-control" name="image" placeholder="image" style="background-color: #f5f8fa;"> 
                                </div>
                            </div>

                            @if(empty($forums->image))
                                <small><i class="fa fa-info-circle"></i> Tidak ada gambar yang diupload</small>
                            @else
                            <div class="form-group">
                               <div class="col-md-4"> 
                               <img src="{{asset('images/'.$forums->image)}}" alt="" width="100%">
                               </div>
                           </div>
                           @endif
                          </div>
                           <br> 
                      <button type="submit" class="btn btn-success btn-block">Submit</button>
                   </form>

                </div>
            </div>
          <br> 
        <div class="create_info" style="color: #fff;">
         <h5><i class="fa fa-info-circle"></i> Info</h5>
           <span>- Klik icon <strong>Gambar</strong> untuk upload dan edit gambar screenshot.</span> 
          </div><br>
          <div class="alert alert-info alert-dismissible fade show" role="alert"> 
          <b>Pertanyaan terakhir edit:</b><br> 
           <a href="#" style="color: #444"><h5 style="margin-top: 4px;"><i class="fa fa-newspaper-o"></i> {{$forum->title}}</h5></a>  
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
       </div>
    </div>
  </div>
</div>
@endsection
  
@section('js')

<script type="text/javascript">
$(".tags").select2({
    placeholder: "Select tags",
    maximumSelectionLength: 2
});

 CKEDITOR.replace( 'description', {
  extraPlugins: 'codesnippet',
  codeSnippet_theme: 'monokai_sublime'
} );
</script>

@endsection

{{-- @endif --}}