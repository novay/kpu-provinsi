<style type="text/css">
	.chzn-container a:first-child {
		width:210px;
	}
	.chzn-container .chzn-drop {
		width:220px;
	}
	.chzn-container .chzn-search input {
		width:210px;
	}
</style>

<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="blue bigger"><i class="icon-plus"></i> Tambah Kecamatan</h4>
</div>

<div class="modal-body overflow-visible">
	{{ Form::open([
		'route' => 'kecamatan_baru',
		'class' => 'form-horizontal form-tambah-kecamatan']) 
	}}
	<div class="row-fluid">
		<div class="span10">
			<div class="control-group" id="control-kabupaten">
				{{ Form::label('id_kabupaten', 'Kabupaten', [
					'class' => 'control-label']) 
				}}
				<div class="controls">
					{{ Form::select('id_kabupaten', Kabupaten::dropdown(), null, array('class'=>'chzn-select', 'data-placeholder'=>'Pilih Kabupaten...'))	}}
					<small><span class="help-block" id="error-kabupaten"></span></small>
				</div>
			</div>
			<div class="control-group" id="control-nama">
				{{ Form::label('nama', 'Nama Kecamatan', [
					'class' => 'control-label']) 
				}}
				<div class="controls">
					{{ Form::text('nama', NULL, [
						'id'=>'nama',
						'class' => 'input-focus',
						'onkeypress'=>'enterTambahKecamatan(event)',
						'maxlength'=>50]) 
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
		'onclick'=>'tambahKecamatan()']) 
	}}
	{{ Form::close() }}
</div>