<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="blue bigger">Ubah Negara Domisili</h4>
</div>

<div class="modal-body overflow-visible">
	<div class="row-fluid form-horizontal">
		<div class="span12">
			<div class="control-group" id="control-negara">
				{{ Form::label('negara', 'Negara', ['class'=>'control-label']) }}
				<div class="controls">
					{{ Form::text('negara', Organisasi::data()->negara, [
						'id'=>'negara',
						'class'=>'input-focus',
						'onKeyPress'=>'enterGantiNegara(event)',
						'maxlength'=>50]) 
					}}
					<small><span class="help-block" id="error-negara"></span></small>
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
	{{Form::button('<i class="icon-ok"></i> Update',['class'=>'btn btn-small btn-primary','onclick'=>'gantiNegara()'])}}
</div>