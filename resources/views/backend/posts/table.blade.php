<table class="table table-responsive">
	<thead>
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Isi</th>
			<th>Dibuat</th>
			<th>Action</th>
		</tr>
	</thead>
	<?php $no=1; ?>
	@foreach($posts as $post)
	<tbody>
		<tr>
		<!-- //ini tabel -->
			<td scope="row">{{ $no++ }}</td>
			<td>{{ substr($post->title,0, 50) }}{{ strlen($post->title) > 50 ? "..." : "" }}</td>
			<td>{{ substr($post->body,0, 100) }}</td>
			<td>{{ $post->created_at }}</td>
			<td>
				{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
					<a href="{{ route ('posts.edit',$post->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit </a>
					<button type="submit"  class="btn btn-danger btn-xs" onclick="return confirm('Apakah kamu yakin ingin Menghapus data ini')" ><i class="fa fa-trash-o"></i> Hapus </a>
					</button>
					{!! Form::close() !!}
			</td>
		</tr>
	</tbody>
	@endforeach
</table>
{!! $posts->links() !!}