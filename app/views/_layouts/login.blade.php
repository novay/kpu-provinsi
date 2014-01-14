<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Login Satpam</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
{{-- Favicon --}}
		<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

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
@yield('style')

	</head>
	<body class="login-layout">

		<div class="main-container container-fluid">
			<div class="main-content">
				<div class="row-fluid">
					<div class="span12">
						@yield('konten')
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
		{{ HTML::script('packages/digilib/js/script/login.js') }}
{{-- Untuk JS tambahan --}}
@yield('script')

	</body>
</html>