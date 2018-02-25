@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">POSTING</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
					<p><a class="btn btn-primary" href="{{ route('posts.create') }}">Tambah</a></p>
					<table class="table table-responsive">
						<thead>
							<tr>
								<th>No</th>
								<th>Title</th>
								<th>Body</th>
								<th>Author</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>aku anak indonesia</td>
								<td>Menjadi sesuatu</td>
								<td>SuperAdmin</td>
								<td>
									<a href="#" class="btn btn-xs btn-warning">
										<i class="fa fa-pencil"></i> 
									</a>
									<button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Apakah kamu yakin ingin Menghapus data ini')" >
										<i class="fa fa-trash-o"></i> 
									</button>
								</td>
							</tr>
						</tbody>
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
