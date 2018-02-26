<table class="table table-responsive">
	<thead>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Create At</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($categories as $category)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $category->name }}</td>
			<td>{{ $category->created_at }}</td>
			<td>
				{!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
				<a href="{{ route ('categories.edit',$category->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit </a>
				<button type="submit"  class="btn btn-danger btn-xs" onclick="return confirm('Apakah kamu yakin ingin Menghapus data ini')" ><i class="fa fa-trash-o"></i> Hapus </a>
				</button>
				{!! Form::close() !!}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

