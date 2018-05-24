@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">TIPS</div>

                <div class="card-body">
                   <!--  @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif -->
                     
                    <p><a class="btn btn-primary" href="{{ route('daftartip.create') }}">Tambah</a></p>
                    @include('backend.daftartip.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
