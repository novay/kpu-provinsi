<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="blue bigger">Ubah Nama Organisasi</h4>
</div>

<div class="modal-body overflow-visible">
	<div class="row-fluid form-horizontal">
		<div class="span12">
			<div class="control-group" id="control-nama">
				{{ Form::label('nama', 'Nama Organisasi', ['class'=>'control-label']) }}
				<div class="controls">
					{{ Form::text('nama', Organisasi::data()->nama, [
						'class'=>'input-focus',
						'onKeyPress'=>'enterGantiNama(event)',
						'maxlength'=>50]) 
					}}
					<small><span class="help-block" id="error-nama"></span></small>
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
	{{Form::button('<i class="icon-ok"></i> Update',['class'=>'btn btn-small btn-primary','onclick'=>'gantiNama()'])}}
</div>