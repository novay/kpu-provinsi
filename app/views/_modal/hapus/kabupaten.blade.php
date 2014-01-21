<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="blue bigger"><i class="icon-trash"></i> Hapus Kabupaten</h4>
</div>

<div class="modal-body text-center">
	<p>Anda yakin akan menghapus kabupaten/kota <strong>{{ strtoupper($kabupaten->nama) }}</strong>?</p>
</div>

<div class="modal-footer">
	<a class="btn btn-small" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Batal</a>
	<a onclick="hapusKabupaten({{$kabupaten->id}})" class="btn btn-small btn-primary"><i class="icon-ok"></i> Hapus</a>
</div>