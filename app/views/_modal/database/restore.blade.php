<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="blue bigger">Restore Database</h4>
</div>

<div class="modal-body overflow-visible">
	<div class="row-fluid">
		{{ Form::open(['route' => 'restore', 'files' => true, 'class' => 'form-horizontal form-restore']) }}
		<div class="control-group" id="control-sql">
			<div class="widget-main">
				<div class="ace-file-input">
					{{ Form::file('sql', ['id'=>'temp']) }}
					<small><span class="help-block text-center" id="error-sql"></span></small>
				</div>
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
		'onclick' => 'restoreDB()']) 
	}}
	{{ Form::close() }}
</div>

<script type="text/javascript">
	$(function() {
		$('#temp').ace_file_input({
			no_file:'File SQL masih belum ditentukan...',
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