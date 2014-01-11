@section('content')
<div class="toolbar">
    <h1>Viewing kabupaten</h1>
    <a class="btn" href="{{ url('kabupaten/'.$kabupaten->id.'/edit') }}">Edit</a>
</div>
<div class="inner-main-content">
    <ul>
        <li>Nama: {{ $kabupaten->nama }}</li>    <ul>
</div>
@stop
