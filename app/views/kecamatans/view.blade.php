@section('content')
<div class="toolbar">
    <h1>Viewing kecamatan</h1>
    <a class="btn" href="{{ url('kecamatans/'.$kecamatan->id.'/edit') }}">Edit</a>
</div>
<div class="inner-main-content">
    <ul>
        <li>Nama: {{ $kecamatan->nama }}</li>        <li>Id_kabupaten: {{ $kecamatan->id_kabupaten }}</li>    <ul>
</div>
@stop
