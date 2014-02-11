<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="blue bigger">Ubah Foto Avatar</h4>
</div>

<div class="modal-body overflow-visible">
	{{ Form::open(array('route'=>'avatar', 'files' => true, 'class' => 'form-horizontal form-ubah-avatar')) }}
	<div class="control-group" id="control-avatar">
		<div class="center">
			<span class="profile-picture">
				<img src="{{ asset('assets/img') }}/{{ Auth::user()->avatar }}" alt="{{ Auth::user()->avatar }}" width="200px"/>
			</span>
		</div>
		<div class="widget-main">
			<div class="ace-file-input">
				{{ Form::file('avatar', ['id'=>'temp']) }}
				<small><span class="help-block text-center" id="error-avatar"></span></small>
			</div>
		</div>
	</div>
</div>

<div class="modal-footer">
	{{ Form::button('<i class="icon-remove"></i> Batal', [
		'class'=>'btn btn-small', 
		'data-dismiss'=>'modal', 
		'aria-hidden' => 'true']) }}
	{{ Form::button('<i class="icon-ok"></i> Update',['class'=>'btn btn-small btn-primary','onclick'=>'gantiAvatar()']) }}
	{{ Form::close() }}
</div>

<script type="text/javascript">
	$(function() {
		$('#temp').ace_file_input({
			no_file:'Pilih baru bila ingin mengubah avatar pengguna...',
			btn_choose:'Pilih',
			btn_change:'Ganti',
			droppable:false,
			onchange:null,
			thumbnail:false //| true | large
			//whitelist:'gif|png|jpg|jpeg'
			//blacklist:'exe|php|js'
			//onchange:''
			//
		});
	});
</script>