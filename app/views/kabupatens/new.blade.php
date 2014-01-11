@section('content')
<div class="toolbar">
    <h2>New Kabupaten</h2>
</div>
<div class="inner-main-content">
    <form class="form-horizontal" method="POST" action="{{ url('kabupatens') }}">
    <div class="control-group">
        <label class="control-label" for="nama">Nama</label>
        <div class="controls">
            <input type="text" name="nama" id="nama" placeholder="Nama">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label"></label>
        <div class="controls">
            <input class="btn" type="reset" value="Reset">
            <input class="btn" type="submit" value="Add New kabupaten">
        </div>
    </div>
</div>
@stop
