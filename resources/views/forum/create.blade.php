@extends('layouts.main2')

@section('title', 'Buat Diskusi')

@section('content')


<section class="page-title style-2">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1>FORUM</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{ url('/') }}">Home</a>
              </li>
              <li>
                <a href="#">Forum</a>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
	<div class="row">
	<div class="col-md-12">
		<form action="{{ route('forum.store') }}" method="post" role="form">
			{{ csrf_field() }}
			<div class="well">
				<h4 calass="text-center">Buat Diskusi</h4>
				<div class="form-group">
					<label for="judul">Judul</label>
					<input type="text" name="title" value="" class="form-control" placeholder="Isi Judul">
				</div>

				<div class="form-group">
					<label for="Tag">Tag</label>
					<select name="tags[]" multiple="multiple" class="form-control tags" placeholder="Tags">
						@foreach ($tags as $tag)
						<option value="{{ $tag->id }}">{{ $tag->name }}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="diskusi">Diskusi</label>
					<textarea name="post" value="" class="form-control" placeholder="Isi Diskusi"></textarea>
				</div>

				<button type="submit" class="btn btn-success">Submit</button>
			</div>

	<div class="col-md-4">
		<div class="alert alert-dismissible alert-info">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong>Sudah punya akun ?</strong> <a href="{{ url('register') }}" class="alert-link">Daftar disini</a>
		</div>
	</div>
</form>
</div>
</div>
</div>

@endsection

@section('js')
<script type="text/javascript">
    $(".tags").select2({
    placeholder: "Pilih Kategori",
    maximumSelectionLength: 2
	});
    CKEDITOR.replace( 'post',{
        extraPlugins:'codesnippet',
        codeSnippet_theme:'dark'
    });
</script>
@endsection