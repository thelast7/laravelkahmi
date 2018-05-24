@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Create Daftartip</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

					{!! Form::open(['route'=>'daftartip.store', 'method' => 'POST', 'class'=> 'form-horizontal form-label-left', 'files' => true]) !!}

						@include('backend.daftartip._form')

				   	{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection