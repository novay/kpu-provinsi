@section('content')
<div class="toolbar">
    <h2>Edit pemilih</h2>
</div>
<div class="inner-main-content">
    <form class="form-horizontal" method="POST" action="{{ url('pemilih/'.$pemilih->id) }}">
    <input type="hidden" name="_method" value="PUT">
    <div class="control-group">
        <label class="control-label" for="nik">Nik</label>
        <div class="controls">
            <input type="text" name="nik" id="nik" placeholder="Nik" value="{{ $pemilih->nik }}">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="nama">Nama</label>
        <div class="controls">
            <input type="text" name="nama" id="nama" placeholder="Nama" value="{{ $pemilih->nama }}">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="jenis_kelamin">Jenis_kelamin</label>
        <div class="controls">
            <input type="text" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis_kelamin" value="{{ $pemilih->jenis_kelamin }}">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="status">Status</label>
        <div class="controls">
            <input type="text" name="status" id="status" placeholder="Status" value="{{ $pemilih->status }}">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="tempat_lahir">Tempat_lahir</label>
        <div class="controls">
            <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat_lahir" value="{{ $pemilih->tempat_lahir }}">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="tanggal_lahir">Tanggal_lahir</label>
        <div class="controls">
            <input type="text" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal_lahir" value="{{ $pemilih->tanggal_lahir }}">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="umur">Umur</label>
        <div class="controls">
            <input type="text" name="umur" id="umur" placeholder="Umur" value="{{ $pemilih->umur }}">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="alamat">Alamat</label>
        <div class="controls">
            <input type="text" name="alamat" id="alamat" placeholder="Alamat" value="{{ $pemilih->alamat }}">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="no_telp">No_telp</label>
        <div class="controls">
            <input type="text" name="no_telp" id="no_telp" placeholder="No_telp" value="{{ $pemilih->no_telp }}">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="keterangan">Keterangan</label>
        <div class="controls">
            <input type="text" name="keterangan" id="keterangan" placeholder="Keterangan" value="{{ $pemilih->keterangan }}">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="id_tps">Id_tps</label>
        <div class="controls">
            <input type="text" name="id_tps" id="id_tps" placeholder="Id_tps" value="{{ $pemilih->id_tps }}">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="id_kelurahan">Id_kelurahan</label>
        <div class="controls">
            <input type="text" name="id_kelurahan" id="id_kelurahan" placeholder="Id_kelurahan" value="{{ $pemilih->id_kelurahan }}">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="id_kecamatan">Id_kecamatan</label>
        <div class="controls">
            <input type="text" name="id_kecamatan" id="id_kecamatan" placeholder="Id_kecamatan" value="{{ $pemilih->id_kecamatan }}">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="id_kabupaten">Id_kabupaten</label>
        <div class="controls">
            <input type="text" name="id_kabupaten" id="id_kabupaten" placeholder="Id_kabupaten" value="{{ $pemilih->id_kabupaten }}">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label"></label>
        <div class="controls">
            <input class="btn" type="reset" value="Reset">
            <input class="btn" type="submit" value="Edit pemilih">
        </div>
    </div>
    </form>
</div>
@stop
