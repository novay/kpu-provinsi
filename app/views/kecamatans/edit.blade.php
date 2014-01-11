@section('content')
<div class="toolbar">
    <h2>Edit kecamatan</h2>
</div>
<div class="inner-main-content">
    <form class="form-horizontal" method="POST" action="{{ url('kecamatans/'.$kecamatan->id) }}">
    <input type="hidden" name="_method" value="PUT">
    <div class="control-group">
        <label class="control-label" for="nama">Nama</label>
        <div class="controls">
            <input type="text" name="nama" id="nama" placeholder="Nama" value="{{ $kecamatan->nama }}">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="id_kabupaten">Id_kabupaten</label>
        <div class="controls">
            <input type="text" name="id_kabupaten" id="id_kabupaten" placeholder="Id_kabupaten" value="{{ $kecamatan->id_kabupaten }}">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label"></label>
        <div class="controls">
            <input class="btn" type="reset" value="Reset">
            <input class="btn" type="submit" value="Edit kecamatan">
        </div>
    </div>
    </form>
</div>
@stop
