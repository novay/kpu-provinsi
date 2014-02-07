<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="blue bigger">{{ $judul }}</h4>
</div>

<div class="modal-body overflow-visible">
	<div class="row-fluid form-horizontal">
		<div class="span12">
			<div class="control-group" id="control-temp">
				{{-- Jika Ubah Logo --}}
				@if($type=='file')
				<div class="center">
					<span class="profile-picture">
						<img src="{{asset('assets/img')}}/{{$set}}" width="200px"/>
					</span>
				</div>
				<div class="widget-main">
					<div class="ace-file-input">
						{{ Form::$type($id,['id'=>'temp']) }}
						<small><span class="help-block" id="error-temp"></span></small>
					</div>
				</div>
				<script type="text/javascript">
					$(function() {
						$('#temp').ace_file_input({
							no_file:'Pilih baru bila ingin mengubah logo ...',
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
				{{-- Selain itu --}}
				@else
				{{ Form::label($id, $label, ['class'=>'control-label']) }}
				<div class="controls">
					{{ Form::$type($id, $set, ['id'=>'temp','class'=>'input-focus','onKeyPress'=>$onKeyPress,'maxlength'=>50])}}
					<small><span class="help-block" id="error-temp"></span></small>
				</div>
				@endif
			</div>
		</div>
	</div>
</div>

<div class="modal-footer">
	{{Form::button('<i class="icon-remove"></i> Batal', [
		'class'=>'btn btn-small', 
		'data-dismiss'=>'modal', 
		'aria-hidden' => 'true'])}}
	{{Form::button('<i class="icon-ok"></i> Update',['class'=>'btn btn-small btn-primary','onclick'=>$onclick])}}
</div>
