@section('content')
<div class="toolbar">
    <h1>All Kecamatan</h1>
    <a class="btn" href="{{ url('kecamatan/create') }}">New</a>
</div>
<div class="inner-main-content">
<table class="table">
<thead>
	<th>Nama</th>
	<th>Id_kabupaten</th>
</thead>
<tbody>
@foreach($kecamatan as $temp)
	<tr>
		<td><a href="{{ url('kecamatan/'.$temp->id) }}">{{ $temp->nama }}</a></td><td><a href="{{ url('kecamatan/'.$temp->id) }}">{{ $temp->id_kabupaten }}</a></td>
	</tr>
@endforeach
</tbody>
</table>
</div>
@stop
