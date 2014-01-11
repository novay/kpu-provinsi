@section('content')
<div class="toolbar">
    <h1>All Tps</h1>
    <a class="btn" href="{{ url('tps/create') }}">New</a>
</div>
<div class="inner-main-content">
<table class="table">
<thead>
	<th>Nama</th>
	<th>Id_kelurahan</th>
	<th>Id_kecamatan</th>
	<th>Id_kabupaten</th>
</thead>
<tbody>
@foreach($tps as $tps)
	<tr>
		<td><a href="{{ url('tps/'.$tps->id) }}">{{ $tps->nama }}</a></td><td><a href="{{ url('tps/'.$tps->id) }}">{{ $tps->id_kelurahan }}</a></td><td><a href="{{ url('tps/'.$tps->id) }}">{{ $tps->id_kecamatan }}</a></td><td><a href="{{ url('tps/'.$tps->id) }}">{{ $tps->id_kabupaten }}</a></td>
	</tr>
@endforeach
</tbody>
</table>
</div>
@stop
