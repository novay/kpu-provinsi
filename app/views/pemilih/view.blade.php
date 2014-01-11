@section('content')
<div class="toolbar">
    <h1>Viewing pemilih</h1>
    <a class="btn" href="{{ url('pemilih/'.$pemilih->id.'/edit') }}">Edit</a>
</div>
<div class="inner-main-content">
    <ul>
        <li>Nik: {{ $pemilih->nik }}</li>        
        <li>Nama: {{ $pemilih->nama }}</li>        
        <li>Jenis_kelamin: {{ $pemilih->jenis_kelamin }}</li>       
        <li>Status: {{ $pemilih->status }}</li>        
        <li>Tempat_lahir: {{ $pemilih->tempat_lahir }}</li>        
        <li>Tanggal_lahir: {{ $pemilih->tanggal_lahir }}</li>       
        <li>Umur: {{ $pemilih->umur }}</li>        
        <li>Alamat: {{ $pemilih->alamat }}</li>        
        <li>No_telp: {{ $pemilih->no_telp }}</li>        
        <li>Keterangan: {{ $pemilih->keterangan }}</li>        
        <li>Id_tps: {{ $pemilih->id_tps }}</li>        
        <li>Id_kelurahan: {{ $pemilih->id_kelurahan }}</li>        
        <li>Id_kecamatan: {{ $pemilih->id_kecamatan }}</li>        
        <li>Id_kabupaten: {{ $pemilih->id_kabupaten }}</li>    <ul>
</div>
@stop
