@section('content')
<div class="toolbar">
    <h1>All kabupaten</h1>
    <a class="btn" href="{{ url('kabupaten/create') }}">New</a>
</div>
<div class="inner-main-content">
<table class="table">
<thead>
	<th>Nama</th>
</thead>
<tbody>
@foreach($kabupaten as $temp)
	<tr>
		<td><a href="{{ url('kabupaten/'.$temp->id) }}">{{ $temp->nama }}</a></td>
	</tr>
@endforeach
</tbody>
</table>
</div>
@stop
