<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Login Satpam</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
{{-- Favicon --}}
		<link rel="icon" href="{{ asset('favicon.ico') }}">

{{-- Koleksi CSS --}}
		{{ HTML::style('packages/ace/css/bootstrap.min.css') }}
		{{ HTML::style('packages/ace/css/bootstrap-responsive.min.css') }}
		{{ HTML::style('packages/ace/css/font-awesome.min.css') }}
		<!--[if IE 7]> {{ HTML::style('packages/ace/css/font-awesome-ie7.min.css') }} <![endif]-->
{{-- Plugin Style --}}
		{{ HTML::style('packages/ace/css/jquery-ui-1.10.3.custom.min.css') }}
{{-- Fonts --}}
		<!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" /> -->
{{-- Paket Ace Style --}}
		{{ HTML::style('packages/ace/css/ace.min.css') }}
		{{ HTML::style('packages/ace/css/ace-responsive.min.css') }}
		{{ HTML::style('packages/ace/css/ace-skins.min.css') }}
		<!--[if lte IE 8]> {{ HTML::style('packages/ace/css/ace-ie.min.css') }} <![endif]-->
{{-- Paket dari Heru --}}
		{{ HTML::style('packages/digilib/css/messenger.css') }}
		{{ HTML::style('packages/digilib/css/future.css') }}
{{-- Untuk CSS tambahan --}}
		<style type="text/css">
			.panel {
				margin-top:100px;
			}
		</style>
	</head>
	<body class="login-layout">

		<div class="main-container container-fluid">
			<div class="main-content">
				<div class="row-fluid">
					<div class="span12">
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
																		'id' => 'ingat', 'class'=>'ace-checkbox-2']) 
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
					</div>
				</div>
			</div><!--/.main-content-->
		</div> <!--/.main-container-->
{{-- Koleksi Jacascript --}}
		{{ HTML::script('assets/js/jquery-2.0.3.js') }}
		<!--[if IE]> 
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
		<![endif]-->
		<!--[if !IE]>-->
		<script type="text/javascript">
		window.jQuery || document.write("<script src='../packages/ace/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>
		<!--<![endif]-->
		<!--[if IE]>
		<script type="text/javascript">
		window.jQuery || document.write("<script src='../packages/ace/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
		</script>
		<![endif]-->
		<script type="text/javascript">
		if("ontouchend" in document) document.write("<script src='../packages/ace/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		{{ HTML::script('packages/ace/js/bootstrap.min.js') }}
		<!--[if lte IE 8]>
			{{ HTML::script('packages/ace/js/excanvas.min.js') }}
		<![endif]-->
		{{ HTML::script('packages/ace/js/jquery-ui-1.10.3.custom.min.js') }}
		{{ HTML::script('packages/ace/js/jquery.ui.touch-punch.min.js') }}
{{-- Skrip Ace --}}
		{{ HTML::script('packages/ace/js/ace-elements.min.js') }}
		{{ HTML::script('packages/ace/js/ace.min.js') }}
{{-- Paket dari Heru --}}
		{{ HTML::script('packages/digilib/js/underscore.js') }}
		{{ HTML::script('packages/digilib/js/backbone.js') }}
		{{ HTML::script('packages/digilib/js/messenger.js') }}
		{{ HTML::script('packages/digilib/js/future.js') }}
{{-- Javascript Untuk Autentkasi --}}
		{{ HTML::script('assets/js/dev/autentikasi.js') }}
{{-- Untuk JS tambahan --}}
		<script type="text/javascript">
			var url_home  = '{{ route('home') }}';
			var url_login = '{{ route('login') }}'; 
		</script>
	</body>
</html>