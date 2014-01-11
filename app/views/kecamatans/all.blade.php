@section('content')
<div class="toolbar">
    <h1>All Kecamatans</h1>
    <a class="btn" href="{{ url('kecamatans/create') }}">New</a>
</div>
<div class="inner-main-content">
<table class="table">
<thead>
	<th>Nama</th>
	<th>Id_kabupaten</th>
</thead>
<tbody>
@foreach($kecamatans as $kecamatan)
	<tr>
		<td><a href="{{ url('kecamatans/'.$kecamatan->id) }}">{{ $kecamatan->nama }}</a></td><td><a href="{{ url('kecamatans/'.$kecamatan->id) }}">{{ $kecamatan->id_kabupaten }}</a></td>
	</tr>
@endforeach
</tbody>
</table>
</div>
@stop
