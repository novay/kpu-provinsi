<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="blue bigger">Ubah Alamat Organisasi</h4>
</div>

<div class="modal-body overflow-visible">
	<div class="row-fluid form-horizontal">
		<div class="span12">
			<div class="control-group" id="control-alamat">
				{{ Form::label('alamat', 'Alamat Organisasi', ['class'=>'control-label']) }}
				<div class="controls">
					{{ Form::textarea('alamat', Organisasi::data()->alamat, [
						'id'=>'alamat',
						'class'=>'input-focus',
						'onKeyPress'=>'enterGantiAlamat(event)',
						'maxlength'=>50]) 
					}}
					<small><span class="help-block text-center" id="error-alamat"></span></small>
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
	{{Form::button('<i class="icon-ok"></i> Update',['class'=>'btn btn-small btn-primary','onclick'=>'gantiAlamat()'])}}
</div>