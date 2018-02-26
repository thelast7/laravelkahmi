@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">POSTING</div>

                <div class="card-body">
                   <!--  @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif -->
                     
					<p><a class="btn btn-primary" href="{{ route('posts.create') }}">Tambah</a></p>
					@include('backend.posts.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
