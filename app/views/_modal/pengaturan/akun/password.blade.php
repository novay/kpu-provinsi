<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="blue bigger">Ubah Kata Sandi</h4>
</div>

<div class="modal-body overflow-visible">
	<div class="row-fluid form-horizontal form-ubah-password">

			<div class="control-group" id="control-password-sekarang">
				{{ Form::label('password_sekarang', 'Password Sekarang', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::password('password_sekarang', array( 
						'onkeypress'	=> 'enterGantiPassword(event)', 
						'class' 		=> 'input-focus')) 
					}}
					<small><span class="help-block" id="error-password-sekarang"></span></small>
				</div>
			</div>

			<div class="control-group" id="control-password-baru">
				{{ Form::label('password_baru', 'Password Baru', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::password('password_baru', array( 
						'onkeypress' => 'enterGantiPassword(event)')) 
					}}
					<small><span class="help-block" id="error-password-baru"></span></small>
				</div>
			</div>

			<div class="control-group" id="control-konfirmasi-password">
				{{ Form::label('konfirmasi_password', 'Konfirmasi Password', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::password('konfirmasi_password', array( 
						'onkeypress' 	=> 'enterGantiPassword(event)')) 
					}}
					<small><span class="help-block" id="error-konfirmasi-password"></span></small>
				</div>
			</div>
	</div>
</div>

<div class="modal-footer">
	{{Form::button('<i class="icon-remove"></i> Batal', [
		'class'=>'btn btn-small', 
		'data-dismiss'=>'modal', 
		'aria-hidden' => 'true'])}}
	{{Form::button('<i class="icon-ok"></i> Update',['class'=>'btn btn-small btn-primary','onclick'=>'gantiPassword()'])}}
</div>