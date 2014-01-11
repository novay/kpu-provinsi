@section('content')
<div class="toolbar">
    <h1>All Pemilihs</h1>
    <a class="btn" href="{{ url('pemilihs/create') }}">New</a>
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
@foreach($pemilihs as $pemilih)
	<tr>
		<td><a href="{{ url('pemilihs/'.$pemilih->id) }}">{{ $pemilih->nik }}</a></td><td><a href="{{ url('pemilihs/'.$pemilih->id) }}">{{ $pemilih->nama }}</a></td><td><a href="{{ url('pemilihs/'.$pemilih->id) }}">{{ $pemilih->jenis_kelamin }}</a></td><td><a href="{{ url('pemilihs/'.$pemilih->id) }}">{{ $pemilih->status }}</a></td><td><a href="{{ url('pemilihs/'.$pemilih->id) }}">{{ $pemilih->tempat_lahir }}</a></td><td><a href="{{ url('pemilihs/'.$pemilih->id) }}">{{ $pemilih->tanggal_lahir }}</a></td><td><a href="{{ url('pemilihs/'.$pemilih->id) }}">{{ $pemilih->umur }}</a></td><td><a href="{{ url('pemilihs/'.$pemilih->id) }}">{{ $pemilih->alamat }}</a></td><td><a href="{{ url('pemilihs/'.$pemilih->id) }}">{{ $pemilih->no_telp }}</a></td><td><a href="{{ url('pemilihs/'.$pemilih->id) }}">{{ $pemilih->keterangan }}</a></td><td><a href="{{ url('pemilihs/'.$pemilih->id) }}">{{ $pemilih->id_tps }}</a></td><td><a href="{{ url('pemilihs/'.$pemilih->id) }}">{{ $pemilih->id_kelurahan }}</a></td><td><a href="{{ url('pemilihs/'.$pemilih->id) }}">{{ $pemilih->id_kecamatan }}</a></td><td><a href="{{ url('pemilihs/'.$pemilih->id) }}">{{ $pemilih->id_kabupaten }}</a></td>
	</tr>
@endforeach
</tbody>
</table>
</div>
@stop
