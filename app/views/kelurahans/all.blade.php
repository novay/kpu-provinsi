@section('content')
<div class="toolbar">
    <h1>All Kelurahans</h1>
    <a class="btn" href="{{ url('kelurahans/create') }}">New</a>
</div>
<div class="inner-main-content">
<table class="table">
<thead>
	<th>Nama</th>
	<th>Id_kecamatan</th>
	<th>Id_kabupaten</th>
</thead>
<tbody>
@foreach($kelurahans as $kelurahan)
	<tr>
		<td><a href="{{ url('kelurahans/'.$kelurahan->id) }}">{{ $kelurahan->nama }}</a></td><td><a href="{{ url('kelurahans/'.$kelurahan->id) }}">{{ $kelurahan->id_kecamatan }}</a></td><td><a href="{{ url('kelurahans/'.$kelurahan->id) }}">{{ $kelurahan->id_kabupaten }}</a></td>
	</tr>
@endforeach
</tbody>
</table>
</div>
@stop
