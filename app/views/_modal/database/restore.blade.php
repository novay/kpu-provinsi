<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="blue bigger">Restore Database</h4>
</div>

<div class="modal-body">
	<div class="row-fluid">
		{{ Form::open(['route' => 'restore', 'files' => true, 'class' => 'form-horizontal form-restore']) }}
		<div class="control-group" id="control-sql">
			{{ Form::label('sql', 'SQL', ['class' => 'control-label']) }}
			<div class="controls">
				<div class="fileupload fileupload-new" data-provides="fileupload">
					<div class="input-append">
						<div class="uneditable-input"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div>
						<span class="btn btn-file">
							<span class="fileupload-new"><i class="icon-upload"></i></span>
							<span class="fileupload-exists"><i class="icon-edit"></i></span>
							{{ Form::file('sql', ['id' => 'id-input-file sql']) }}
						</span>
					</div>
				</div>
				<span class="help-block" id="error-sql"></span>
			</div>
		</div>
	</div>
</div>

<div class="modal-footer">
	{{ Form::button('<i class="icon-remove"></i> Batal', [
		'class' => 'btn btn-small', 
		'data-dismiss' => 'modal', 
		'aria-hidden' => 'true']) 
	}}

	{{ Form::button('<i class="icon-ok"></i> Simpan', [
		'class' => 'btn btn-small btn-primary', 
		'onclick' => 'restore()']) 
	}}
	{{ Form::close() }}
</div>

<script type="text/javascript">
	$('##id-input-file').ace_file_input({
		no_file:'SQL Kosong...',
		btn_choose:'Pilih',
		btn_change:'Ganti',
		droppable:false,
		onchange:null,
		thumbnail:false //| true | large
		//whitelist:'gif|png|jpg|jpeg'
		//blacklist:'exe|php'
		//onchange:''
		//
	});

</script>