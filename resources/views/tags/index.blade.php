@extends('layouts.main2')

@section('title', 'Tag')

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

	<div class="col-md-4">
	<form action="{{ route('tags.store') }}" method="post">
		{{csrf_field()}}
		<div class="form-group">
			<label for="name">Buat Tag Baru :</label>
			<input type="text" name="name" class="form-control" placeholder="masukan nama tag.."><br>
			<button type="submit" class="btn btn-success">
				Simpan
			</button>
		</div>
	</form>
	</div>

	<div class="col-md-8">
	<table class="table table-hover">
	  <thead>
	    <tr class="table-info">
	      <th scope="col">No.</th>
	      <th scope="col">Nama</th>
	      <th scope="col">Tanggal Dibuat</th>
	      <th scope="col">Tanggal Diedit</th>
	      <th></th>
	      <th></th>
	    </tr>
	  </thead>
	  <tbody>
	@foreach ($tags as $tag)
	    <tr>
	      <th>{{ $tag->id }}</th>
	      <th>{{ $tag->name}}</th>
	      <th>{{ date('j F Y', strtotime($tag->created_at)) }}</th>
	      <th>{{ date('j F Y', strtotime($tag->updated_at)) }}</th>
	      <td><a href="{{ route('tags.edit', $tag->id) }}" type="submit" class="btn btn-default btn-sm">Edit</td>

	      <td><form action="{{ route('tags.destroy', $tag->id) }}" method="post">
	      	{{ csrf_field() }}
	      	{{ method_field('delete') }}
	      	<input type="submit" class="btn btn-danger btn-sm" value="Hapus">
	      </form></td>
	    </tr>
	  </tbody>
	@endforeach
	</table>
	</div>
</div>

</div>
 <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

@endsection