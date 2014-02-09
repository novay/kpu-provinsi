<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="blue bigger">Ubah Nama Pengguna</h4>
</div>

<div class="modal-body overflow-visible">
	<div class="row-fluid form-horizontal form-ubah-username">
		<div class="span12">

			<div class="control-group" id="control-username-sekarang">
				{{ Form::label('username_sekarang', 'Username Sekarang', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('username_sekarang', null, array(
						'onkeypress' 	=> 'enterGantiUsername(event)', 
						'maxlength' 	=> 20, 
						'class' 		=> 'input-focus', 
						'autocomplete' 	=> 'off')) }}
					<small><span class="help-block" id="error-username-sekarang"></span></small>
				</div>
			</div>

			<div class="control-group" id="control-username-baru">
				{{ Form::label('username_baru', 'Username Baru', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('username_baru', null, array( 
						'onkeypress' 	=> 'enterGantiUsername(event)', 
						'maxlength' 	=> 20, 
						'autocomplete' 	=> 'off')) 
					}}
					<small><span class="help-block" id="error-username-baru"></span></small>
				</div>
			</div>

			<div class="control-group" id="control-konfirmasi-username">
				{{ Form::label('konfirmasi_username', 'Konfirmasi Username', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('konfirmasi_username', null, array( 
						'onkeypress' 	=> 'enterGantiUsername(event)', 
						'maxlength' 	=> 20, 
						'autocomplete' 	=> 'off')) 
					}}
					<small><span class="help-block" id="error-konfirmasi-username"></span></small>
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
	{{Form::button('<i class="icon-ok"></i> Update',['class'=>'btn btn-small btn-primary','onclick'=>'gantiUsername()'])}}
</div>