<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="blue bigger">Ubah Nama Tampilan Pengguna</h4>
</div>

<div class="modal-body overflow-visible">
	<div class="row-fluid form-horizontal form-ubah-nama">
		<div class="span12">
			<div class="control-group" id="control-nama">
				{{ Form::label('nama_tampilan', 'Nama Tampilan', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('nama_tampilan', null, array( 
						'id' => 'nama', 
						'onkeypress' => 'enterGantiNamaTampilan(event)', 
						'maxlength' => 50, 
						'class' => 'input-focus', 
						'autocomplete' => 'off')) 
					}}
					<span class="help-block text-center" id="error-nama"></span>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal-footer">
	{{Form::button('<i class="icon-remove"></i> Batal', [
		'class'=>'btn btn-small', 
		'data-dismiss'=>'modal', 
		'aria-hidden' => 'true'])}}
	{{Form::button('<i class="icon-ok"></i> Update',['class'=>'btn btn-small btn-primary','onclick'=>'gantiNamaTampilan()'])}}
</div>