<table class="table table-responsive">
	<thead>
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Isi</th>
			<th>Action</th>
		</tr>
	</thead>
	<?php $no=1; ?>
	@foreach($daftartip as $daftartip)
	<tbody>
		<tr>
		<!-- //ini tabel -->
			<td scope="row">{{ $no++ }}</td>
			<td>
				{{ substr($daftartip->title,0, 50) }}{{ strlen($daftartip->title) > 50 ? "..." : "" }}
			</td>
			<td>
				{{ $daftartip->body }}
			</td>
			<td>
				{!! Form::open(['route' => ['daftartip.destroy', $daftartip->id], 'method' => 'DELETE']) !!}
					<a href="{{ route ('daftartip.edit',$daftartip->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit </a>
					<button type="submit"  class="btn btn-danger btn-xs" onclick="return confirm('Apakah kamu yakin ingin Menghapus data ini')" ><i class="fa fa-trash-o"></i> Hapus </a>
					</button>
				{!! Form::close() !!}
			</td>
		</tr>
	</tbody>
	@endforeach
</table>
{{-- {!! $daftartip->links() !!} --}}