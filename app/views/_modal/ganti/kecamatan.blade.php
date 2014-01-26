<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="blue bigger"><i class="icon-pencil"></i> Ubah Data Kecamatan</h4>
</div>

<div class="modal-body overflow-visible">
	{{ Form::open(array('route' => array('ubah_kecamatan', $temp->id), 'class' => 'form-horizontal form-ubah-kecamatan')) }}
	<div class="row-fluid">
		<div class="span10">
			<div class="control-group" id="control-kabupaten">
				{{ Form::label('id_kabupaten', 'Kabupaten', [
					'class' => 'control-label']) 
				}}
				<div class="controls">

					{{ Form::select('id_kabupaten', Kabupaten::dropdown(), $temp->id_kabupaten)	}}
					<small><span class="help-block" id="error-kabupaten"></span></small>
				</div>
			</div>
			<div class="control-group" id="control-nama">
				{{ Form::label('nama', 'Nama Kecamatan', [
					'class' => 'control-label']) 
				}}
				<div class="controls">
					{{ Form::text('nama', $temp->nama, [
						'id' => 'nama',
						'class' => 'input-focus',
						'onKeyPress' => 'enterUbahKecamatan(event)',
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
	{{ Form::button('<i class="icon-ok"></i> Ganti', [
		'class'=>'btn btn-small btn-primary',
		'onclick'=>'ubahKecamatan()']) 
	}}
	{{ Form::close() }}
</div>




