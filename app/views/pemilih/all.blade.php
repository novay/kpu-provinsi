@section('content')
<div class="toolbar">
    <h1>All pemilih</h1>
    <a class="btn" href="{{ url('pemilih/create') }}">New</a>
</div>
<div class="inner-main-content">
<table class="table">
<thead>
	<th>Nik</th>
	<th>Nama</th>
	<th>Jenis_kelamin</th>
	<th>Status</th>
	<th>Tempat_lahir</th>
	<th>Tanggal_lahir</th>
	<th>Umur</th>
	<th>Alamat</th>
	<th>No_telp</th>
	<th>Keterangan</th>
	<th>Id_tps</th>
	<th>Id_kelurahan</th>
	<th>Id_kecamatan</th>
	<th>Id_kabupaten</th>
</thead>
<tbody>
@foreach($pemilih as $temp)
	<tr>
		<td><a href="{{ url('pemilih/'.$temp->id) }}">{{ $temp->nik }}</a></td>
		<td><a href="{{ url('pemilih/'.$temp->id) }}">{{ $temp->nama }}</a></td>
		<td><a href="{{ url('pemilih/'.$temp->id) }}">{{ $temp->jenis_kelamin }}</a></td>
		<td><a href="{{ url('pemilih/'.$temp->id) }}">{{ $temp->status }}</a></td>
		<td><a href="{{ url('pemilih/'.$temp->id) }}">{{ $temp->tempat_lahir }}</a></td>
		<td><a href="{{ url('pemilih/'.$temp->id) }}">{{ $temp->tanggal_lahir }}</a></td>
		<td><a href="{{ url('pemilih/'.$temp->id) }}">{{ $temp->umur }}</a></td>
		<td><a href="{{ url('pemilih/'.$temp->id) }}">{{ $temp->alamat }}</a></td>
		<td><a href="{{ url('pemilih/'.$temp->id) }}">{{ $temp->no_telp }}</a></td>
		<td><a href="{{ url('pemilih/'.$temp->id) }}">{{ $temp->keterangan }}</a></td>
		<td><a href="{{ url('pemilih/'.$temp->id) }}">{{ $temp->id_tps }}</a></td>
		<td><a href="{{ url('pemilih/'.$temp->id) }}">{{ $temp->id_kelurahan }}</a></td>
		<td><a href="{{ url('pemilih/'.$temp->id) }}">{{ $temp->id_kecamatan }}</a></td>
		<td><a href="{{ url('pemilih/'.$temp->id) }}">{{ $temp->id_kabupaten }}</a></td>
	</tr>
@endforeach
</tbody>
</table>
</div>
@stop
