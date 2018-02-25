@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Create Category</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

					{!! Form::open(['route'=>'posts.store', 'class'=> 'form-horizontal form-label-left']) !!}

						@include('backend.posts._form')

				   	{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('backend.categories.script')
