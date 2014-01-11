@section('content')
<div class="toolbar">
    <h1>Viewing tps</h1>
    <a class="btn" href="{{ url('tps/'.$tps->id.'/edit') }}">Edit</a>
</div>
<div class="inner-main-content">
    <ul>
        <li>Nama: {{ $tps->nama }}</li>        <li>Id_kelurahan: {{ $tps->id_kelurahan }}</li>        <li>Id_kecamatan: {{ $tps->id_kecamatan }}</li>        <li>Id_kabupaten: {{ $tps->id_kabupaten }}</li>    <ul>
</div>
@stop
