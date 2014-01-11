@section('content')
<div class="toolbar">
    <h2>Edit kelurahan</h2>
</div>
<div class="inner-main-content">
    <form class="form-horizontal" method="POST" action="{{ url('kelurahan/'.$kelurahan->id) }}">
    <input type="hidden" name="_method" value="PUT">
    <div class="control-group">
        <label class="control-label" for="nama">Nama</label>
        <div class="controls">
            <input type="text" name="nama" id="nama" placeholder="Nama" value="{{ $kelurahan->nama }}">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="id_kecamatan">Id_kecamatan</label>
        <div class="controls">
            <input type="text" name="id_kecamatan" id="id_kecamatan" placeholder="Id_kecamatan" value="{{ $kelurahan->id_kecamatan }}">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="id_kabupaten">Id_kabupaten</label>
        <div class="controls">
            <input type="text" name="id_kabupaten" id="id_kabupaten" placeholder="Id_kabupaten" value="{{ $kelurahan->id_kabupaten }}">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label"></label>
        <div class="controls">
            <input class="btn" type="reset" value="Reset">
            <input class="btn" type="submit" value="Edit kelurahan">
        </div>
    </div>
    </form>
</div>
@stop
