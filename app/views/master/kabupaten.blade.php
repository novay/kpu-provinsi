{{-- Jika ada --}}
@if($daftar->count())
<div class="page-content">

					<div class="row-fluid">
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->
							<div class="row-fluid">
								<h3 class="header smaller lighter blue">Daftar Kabupaten</h3>
								<div class="table-header">
									Results for "Latest Registered Domains"
								</div>

								<table id="daftar-kabupaten" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th class="center">
												<label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
											</th>
											<th>Nama</th>
											<th class="hidden-480">Kecamatan</th>
											<th class="hidden-480">Kelurahan</th>
											<th class="hidden-480">TPS</th>
											<th></th>
										</tr>
									</thead>

									<tbody>
										@foreach($daftar as $temp)
										<tr>
											<td class="center">
												<label><input type="checkbox" /><span class="lbl"></span></label>
											</td>
											<td class="hidden-480">{{ $temp->nama }}</td>
											<td class="hidden-480">
												<span class="label label-primary">
													{{ Kabupaten::find($temp->id)->Kecamatan()->count() }} Kecamatan
												</span>
											</td>
											<td class="hidden-480">
												<span class="label label-primary">
													{{ Kabupaten::find($temp->id)->Kelurahan()->count() }} Kelurahan
												</span>
											</td>
											<td class="hidden-480">
												<span class="label label-primary">
													{{ Kabupaten::find($temp->id)->Tps()->count() }} TPS
												</span>
											</td>
											<td class="td-actions">
												<div class="hidden-phone visible-desktop action-buttons">
													<a class="blue" href="#">
														<i class="icon-zoom-in bigger-130"></i>
													</a>
													<a class="green" href="#">
														<i class="icon-pencil bigger-130"></i>
													</a>
													<a class="red" href="#">
														<i class="icon-trash bigger-130"></i>
													</a>
												</div>

												<div class="hidden-desktop visible-phone">
													<div class="inline position-relative">
														<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
															<i class="icon-caret-down icon-only bigger-120"></i>
														</button>

														<ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
															<li>
																<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																	<span class="blue">
																		<i class="icon-zoom-in bigger-120"></i>
																	</span>
																</a>
															</li>

															<li>
																<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																	<span class="green">
																		<i class="icon-edit bigger-120"></i>
																	</span>
																</a>
															</li>

															<li>
																<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																	<span class="red">
																		<i class="icon-trash bigger-120"></i>
																	</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>

						</div><!--/.span-->
					</div><!--/.row-fluid-->
				</div><!--/.page-content-->

				<script type="text/javascript">
					$(function() {
						var oTable1 = $('#daftar-kabupaten').dataTable( {
						"aoColumns": [
					      { "bSortable": false },
					      null, null,null, null,
						  { "bSortable": false }
						] } );
						
						$('table th input:checkbox').on('click' , function(){
							var that = this;
							$(this).closest('table').find('tr > td:first-child input:checkbox')
							.each(function(){
								this.checked = that.checked;
								$(this).closest('tr').toggleClass('selected');
							});
								
						});
					
						$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
						function tooltip_placement(context, source) {
							var $source = $(source);
							var $parent = $source.closest('table')
							var off1 = $parent.offset();
							var w1 = $parent.width();
					
							var off2 = $source.offset();
							var w2 = $source.width();
					
							if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
							return 'left';
						}
					})
				</script>

{{-- Jika kosong --}}
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
						<h3 class="lighter smaller">Anda belum memiliki data <strong>kabupaten</strong> untuk ditampilkan.</h3>
						<hr />
						<div>
							<a onclick="modalTambahKabupaten()" role="button" class="btn btn-app btn-primary no-radius" data-toggle="modal">
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