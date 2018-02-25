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
				<a href="#" class="btn btn-xs btn-warning">
					<i class="fa fa-pencil"></i> 
				</a>
				<button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Apakah kamu yakin ingin Menghapus data ini')" >
					<i class="fa fa-trash-o"></i> 
				</button>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

