@section('content')
<div class="toolbar">
    <h1>All kelurahan</h1>
    <a class="btn" href="{{ url('kelurahan/create') }}">New</a>
</div>
<div class="inner-main-content">
<table class="table">
<thead>
	<th>Nama</th>
	<th>Id_kecamatan</th>
	<th>Id_kabupaten</th>
</thead>
<tbody>
@foreach($kelurahan as $temp)
	<tr>
		<td><a href="{{ url('kelurahan/'.$temp->id) }}">{{ $temp->nama }}</a></td><td><a href="{{ url('kelurahan/'.$temp->id) }}">{{ $temp->id_kecamatan }}</a></td><td><a href="{{ url('kelurahan/'.$temp->id) }}">{{ $temp->id_kabupaten }}</a></td>
	</tr>
@endforeach
</tbody>
</table>
</div>
@stop
