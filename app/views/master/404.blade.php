<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>404 Halaman Error</title>
	<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
	<meta name="description" content="404 Error Page" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--basic styles-->
	{{ HTML::style('packages/ace/css/bootstrap.min.css') }}
	{{ HTML::style('packages/ace/css/bootstrap-responsive.min.css') }}
	{{ HTML::style('packages/ace/css/font-awesome.min.css') }}
	<!--[if IE 7]>
	  {{ HTML::style('packages/ace/font-awesome-ie7.min.css') }}
	<![endif]-->
	<!--page specific plugin styles-->
	<!--fonts-->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
	<!--ace styles-->
	{{ HTML::style('packages/ace/css/ace.min.css') }}
	{{ HTML::style('packages/ace/css/ace-responsive.min.css') }}
	{{ HTML::style('packages/ace/css/ace-skins.min.css') }}
	<!--[if lte IE 8]>
	  {{ HTML::style('packages/ace/css/ace-ie.min.css') }}
	<![endif]-->
	<style type="text/css">
		.progress {
			margin: 0 auto;
			width: 400px;
		}
		.konten {
			margin:100px auto;
			width: 700px;
		}
	</style>
</head>
<body>
<div class="konten">
	<div class="page-content text-center">
					<div class="row-fluid">
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->
							<div class="error-container">
								<div class="well">
									<h1 class="grey lighter smaller">
										<span class="blue bigger-125">
											<i class="icon-sitemap"></i>
											404
										</span>
										Page Not Found
									</h1>
									<hr />
									<h3 class="lighter smaller">Halaman yang Anda cari tidak ditemukan!</h3>
									<div>
										<h4 class="smaller">Anda akan dialihkan ke halaman utama.</h4>
									</div>
									<hr />
									<div class="space"></div>
			
									<div class="row-fluid">
										<div class="center">
											<div class="progress">
												<div class="bar" style="width: 0%;"></div>
											</div>
										</div>
									</div>
									<div class="space"></div>
									<p>Develop by Noviyanto Rachmady</p>
								</div>
							</div><!--PAGE CONTENT ENDS-->
						</div><!--/.span-->
					</div><!--/.row-fluid-->
				</div><!--/.page-content-->
			</div>
	<!--basic scripts-->

		<!--[if !IE]>-->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!--<![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->
		<!--[if !IE]>-->
		<script type="text/javascript">
			window.jQuery || document.write("<script src=''../packages/ace/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>
		<!--<![endif]-->
		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src=''../packages/ace/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='../packages/ace/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<!--page specific plugin scripts-->
		<!--ace scripts-->
		{{ HTML::script('packages/ace/js/bootstrap.min.js') }}
		{{ HTML::script('packages/ace/js/ace-elements.min.js') }}
		{{ HTML::script('packages/ace/js/ace.min.js') }}
	<script type="text/javascript">
		var url_home = '{{ route('home') }}';		
		var progress = setInterval(function() {
			var bar = $('.bar');
			if (bar.width() == 400) {
				$(location).prop('href', url_home);
			} else {
				bar.width(bar.width() + 80);
			}
			bar.text(bar.width() / 4 + "%");
		}, 800);
	</script>
</body>
</html>