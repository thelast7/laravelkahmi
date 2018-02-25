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

					{!! Form::model($categories, ['route' => ['categories.update', $categories->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}

						@include('backend.categories._form')

				   	{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('backend.categories.script')
