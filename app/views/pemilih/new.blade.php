@section('content')
<div class="toolbar">
    <h2>New Pemilih</h2>
</div>
<div class="inner-main-content">
    <form class="form-horizontal" method="POST" action="{{ url('pemilih') }}">
    <div class="control-group">
        <label class="control-label" for="nik">Nik</label>
        <div class="controls">
            <input type="text" name="nik" id="nik" placeholder="Nik">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="nama">Nama</label>
        <div class="controls">
            <input type="text" name="nama" id="nama" placeholder="Nama">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="jenis_kelamin">Jenis_kelamin</label>
        <div class="controls">
            <input type="text" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis_kelamin">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="status">Status</label>
        <div class="controls">
            <input type="text" name="status" id="status" placeholder="Status">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="tempat_lahir">Tempat_lahir</label>
        <div class="controls">
            <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat_lahir">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="tanggal_lahir">Tanggal_lahir</label>
        <div class="controls">
            <input type="text" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal_lahir">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="umur">Umur</label>
        <div class="controls">
            <input type="text" name="umur" id="umur" placeholder="Umur">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="alamat">Alamat</label>
        <div class="controls">
            <input type="text" name="alamat" id="alamat" placeholder="Alamat">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="no_telp">No_telp</label>
        <div class="controls">
            <input type="text" name="no_telp" id="no_telp" placeholder="No_telp">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="keterangan">Keterangan</label>
        <div class="controls">
            <input type="text" name="keterangan" id="keterangan" placeholder="Keterangan">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="id_tps">Id_tps</label>
        <div class="controls">
            <input type="text" name="id_tps" id="id_tps" placeholder="Id_tps">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="id_kelurahan">Id_kelurahan</label>
        <div class="controls">
            <input type="text" name="id_kelurahan" id="id_kelurahan" placeholder="Id_kelurahan">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="id_kecamatan">Id_kecamatan</label>
        <div class="controls">
            <input type="text" name="id_kecamatan" id="id_kecamatan" placeholder="Id_kecamatan">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="id_kabupaten">Id_kabupaten</label>
        <div class="controls">
            <input type="text" name="id_kabupaten" id="id_kabupaten" placeholder="Id_kabupaten">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label"></label>
        <div class="controls">
            <input class="btn" type="reset" value="Reset">
            <input class="btn" type="submit" value="Add New pemilih">
        </div>
    </div>
</div>
@stop
