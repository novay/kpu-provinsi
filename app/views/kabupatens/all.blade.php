@section('content')
<div class="toolbar">
    <h1>All Kabupatens</h1>
    <a class="btn" href="{{ url('kabupatens/create') }}">New</a>
</div>
<div class="inner-main-content">
<table class="table">
<thead>
	<th>Nama</th>
</thead>
<tbody>
@foreach($kabupatens as $kabupaten)
	<tr>
		<td><a href="{{ url('kabupatens/'.$kabupaten->id) }}">{{ $kabupaten->nama }}</a></td>
	</tr>
@endforeach
</tbody>
</table>
</div>
@stop
