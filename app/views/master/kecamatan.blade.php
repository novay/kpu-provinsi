@if($daftar->count())


@else
	<div class="space"></div>
	<div class="page-content text-center">
		<div class="row-fluid">
			<div class="span12">
				<!--PAGE CONTENT BEGINS-->
				<div class="error-container">
					<div class="well">
						<h1 class="grey lighter smaller">
							<span class="blue bigger-125"><i class="icon-sitemap"></i></span>
							Perhatian !!!
						</h1>
						<hr />
						<h3 class="lighter smaller">Anda belum memiliki data <strong>kecamatan</strong> untuk ditampilkan.</h3>
						<hr />
						<div>
							<a onclick="modalTambahKecamatan()" class="btn btn-app btn-primary no-radius">
								<i class="icon-plus bigger-230"></i>
								Tambah
							</a>
						</div>
					</div>
				</div><!--PAGE CONTENT ENDS-->
			</div><!--/.span-->
		</div><!--/.row-fluid-->
	</div><!--/.page-content-->
	<div id="#" class="modal hide fade" tabindex="-1"></div>
@endif