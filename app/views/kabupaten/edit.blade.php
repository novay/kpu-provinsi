@section('content')
<div class="toolbar">
    <h2>Edit kabupaten</h2>
</div>
<div class="inner-main-content">
    <form class="form-horizontal" method="POST" action="{{ url('kabupaten/'.$kabupaten->id) }}">
    <input type="hidden" name="_method" value="PUT">
    <div class="control-group">
        <label class="control-label" for="nama">Nama</label>
        <div class="controls">
            <input type="text" name="nama" id="nama" placeholder="Nama" value="{{ $kabupaten->nama }}">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label"></label>
        <div class="controls">
            <input class="btn" type="reset" value="Reset">
            <input class="btn" type="submit" value="Edit kabupaten">
        </div>
    </div>
    </form>
</div>
@stop
