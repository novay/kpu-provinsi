@section('content')
<div class="toolbar">
    <h1>Viewing kelurahan</h1>
    <a class="btn" href="{{ url('kelurahans/'.$kelurahan->id.'/edit') }}">Edit</a>
</div>
<div class="inner-main-content">
    <ul>
        <li>Nama: {{ $kelurahan->nama }}</li>        <li>Id_kecamatan: {{ $kelurahan->id_kecamatan }}</li>        <li>Id_kabupaten: {{ $kelurahan->id_kabupaten }}</li>    <ul>
</div>
@stop
