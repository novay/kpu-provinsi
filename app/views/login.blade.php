@extends('_layouts.login')

@section('style')
<style type="text/css">
.panel {
	margin-top:100px;
}
</style>
@stop

@section('konten')
<div class="login-container">
	<div class="panel">
		<div class="row-fluid">
			<div class="position-relative">
				<div id="login-box" class="login-box visible widget-box no-border">
					<div class="widget-body">
						<div class="widget-main">
							<h4 class="header red lighter bigger">
								Informasi akun Anda :
							</h4>
							<div class="space-6"></div>
							<form />
								<fieldset>
									<div class="control-group" id="control-username">
										<span class="block input-icon input-icon-right">
											{{ Form::text('username', NULL, [
												'id'=>'username',
												'class'=>'span12',
												'maxlength' => 30, 
												'placeholder'=>'Nama Pengguna']) 
											}}
											<i class="icon-user"></i>
										</span>
										<small><center><span class="help-block" id="error-username"></span></center></small>
									</div>
									<div class="control-group" id="control-password">
										<span class="block input-icon input-icon-right">
											{{ Form::password('password', [
												'id'=>'password',
												'class'=>'span12', 
												'placeholder'=>'Kata Sandi']) 
											}}
											<i class="icon-lock"></i>
										</span>
										<small><center><span class="help-block" id="error-password"></span></center></small>
									</div>
									<div class="space"></div>
									<div class="clearfix">
										<label class="inline">
											{{ Form::checkbox('ingat', true, null, [
												'id' => 'ingat']) 
											}}
											<span class="lbl"> Ingatkan Saya</span>
										</label>
										{{ Form::button('<i class="icon-key"></i> Login', [
											'class' => '"width-35 pull-right btn btn-small btn-danger', 
											'onclick' => 'login()']) 
										}}
									</div>
									<div class="space-4"></div>
								</fieldset>
							</form>
						</div><!--/widget-main-->
						<div class="toolbar clearfix">
							<div>
								<a href="https://github.com/novay/kpu-provinsi" class="forgot-password-link" target="_blank">
									<i class="icon-github"></i> Noviyanto Rachmady
								</a>
							</div>
						</div>
					</div><!--/widget-body-->
				</div><!--/login-box-->
			</div><!--/position-relative-->
		</div>
	</div>
</div>
@stop

@section('script')
		<script type="text/javascript">
			var url_home  = '{{ route('home') }}';
			var url_login = '{{ route('login') }}'; 
		</script>
@stop