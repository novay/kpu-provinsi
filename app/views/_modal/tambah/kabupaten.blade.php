<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="blue bigger"><i class="icon-plus"></i> Tambah Kabupaten/Kota</h4>
</div>

<div class="modal-body overflow-visible">
	{{ Form::open([
		'route' => 'kabupaten_baru',
		'class' => 'form-horizontal form-tambah-kabupaten']) 
	}}
	<div class="row-fluid">
		<div class="span10">
			<div class="control-group" id="control-nama">
				{{ Form::label('nama', 'Nama Kabupaten/Kota', [
					'class' => 'control-label']) 
				}}
				<div class="controls">
					{{ Form::text('nama', NULL, [
						'id' => 'nama',
						'class' => 'input-focus',
						'onKeyPress' => 'enterTambahKabupaten(event)',
						'maxlength' => 50]) 
					}}
					<small><span class="help-block" id="error-nama"></span></small>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal-footer">
	{{ Form::button('<i class="icon-remove"></i> Batal', [
		'class'=>'btn btn-small', 
		'data-dismiss'=>'modal', 
		'aria-hidden' => 'true']) 
	}}
	{{ Form::button('<i class="icon-ok"></i> Simpan', [
		'class'=>'btn btn-small btn-primary',
		'onclick'=>'tambahKabupaten()']) 
	}}
	{{ Form::close() }}
</div>




