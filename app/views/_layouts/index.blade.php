<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Beranda | KPU</title>
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
	<body>
	
		@include('_partials.nav')
	<div class="konten">
		<div class="page-content">
			<div class="row-fluid">
				<div class="span12">
					<!--PAGE CONTENT BEGINS-->
					<div class="error-container">
						<div class="well">
							<h1 class="grey lighter smaller">
								<span class="blue bigger-125">
									<i class="icon-coffee"></i>
									KPU
								</span>
								WebApps
							</h1>
							<hr />
							<h3 class="lighter smaller">
								Keep Calm
								<i class="icon-wrench icon-animated-wrench bigger-125"></i>
								on progress!
							</h3>

							<div class="space"></div>

							<div>
								<h4 class="lighter smaller">Penjelasannya nanti, intinya aplikasi ini jadi dulu.</h4>
							</div>

							<hr />
							<div class="space"></div>
							<h4 class="lighter smaller pull-right">Regard, <a href="http://github.com/novay" target="_blank"> Noviyanto Rachmady</a></h4><br />
							<div class="space"></div>
						</div>
					</div>
					<!--PAGE CONTENT ENDS-->
				</div><!--/.span-->
			</div><!--/.row-fluid-->
		</div><!--/.page-content-->
	</div>

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>

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
{{-- JSON Dev --}}
		{{ HTML::script('assets/js/dev/dev.js') }}
		{{ HTML::script('assets/js/dev/autentikasi.js') }}

		@include('_partials.url')
{{-- Untuk JS tambahan --}}
@yield('script')
		
	</body>
</html>
