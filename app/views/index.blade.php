@extends('_layouts.index')

@section('konten')
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
							<h4 class="lighter smaller pull-right">Regard, <a href="http://www.facebook.com/novaymawbowo" target="_blank">Noviyanto Rachmady</a></h4><br />
							<div class="space"></div>
							
						</div>
					</div>

					<!--PAGE CONTENT ENDS-->
				</div><!--/.span-->
			</div><!--/.row-fluid-->
		</div><!--/.page-content-->
@stop

@section('script')
		@include('url')
@stop