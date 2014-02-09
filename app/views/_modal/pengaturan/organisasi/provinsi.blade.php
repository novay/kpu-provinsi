<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="blue bigger">Ubah Provinsi Domisili</h4>
</div>

<div class="modal-body overflow-visible">
	<div class="row-fluid form-horizontal">
		<div class="span12">
			<div class="control-group" id="control-provinsi">
				{{ Form::label('provinsi', 'Provinsi', ['class'=>'control-label']) }}
				<div class="controls">
					{{ Form::text('provinsi', Organisasi::data()->provinsi, [
						'class'=>'input-focus',
						'onKeyPress'=>'enterGantiProvinsi(event)',
						'maxlength'=>50]) 
					}}
					<small><span class="help-block" id="error-provinsi"></span></small>
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
	{{Form::button('<i class="icon-ok"></i> Update',['class'=>'btn btn-small btn-primary','onclick'=>'gantiProvinsi()'])}}
</div>