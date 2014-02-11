<div class="row-fluid">
	<div class="span12">

		<div class="page-header position-relative">
			<h1>
				Pengaturan
				<small>
					Organisasi & Akun
				</small>
			</h1>
		</div>

		<div id="user-profile-2" class="user-profile row-fluid">
			<div class="tabbable">
				<ul class="nav nav-tabs padding-18">
					<li class="active">
						<a data-toggle="tab" href="#organisasi">
							<i class="green icon-dashboard bigger-120"></i>
							Organisasi
						</a>
					</li>

					<li>
						<a data-toggle="tab" href="#akun">
							<i class="red icon-user bigger-120"></i>
							Akun
						</a>
					</li>
				</ul>

				<div class="tab-content no-border padding-24">
					<div id="organisasi" class="tab-pane in active">
						<div class="user-profile row-fluid">
							<div class="span3 center">
								<div>
									<span class="profile-picture">
										<a onclick="modalLogoOrganisasi()">
											<img id="logo" class="editable" alt="Logo Organisasi" src="{{ asset('assets/img') }}/{{ Organisasi::data()->logo }}" style="height:200px"></img>
										</a>
									</span>
								</div>
							</div>
							<div class="span9">
								<div class="widget-box transparent">
									<div class="widget-header widget-header-small">
										<h4 class="blue smaller">Ubah Informasi Organisasi Anda :</h4>
									</div>
								</div>
								<div class="profile-user-info profile-user-info-row">
									<div class="profile-info-row">
										<div class="profile-info-name"> Nama </div>
										<div class="profile-info-value">
											<a onclick="modalNamaOrganisasi()" style="text-decoration:none;color:black">
												<span class="editable editable-click" id="ganti-nama">{{ Organisasi::data()->nama }}</span>
											</a>
										</div>
									</div>

									<div class="profile-info-row">
										<div class="profile-info-name"> Alamat </div>
										<div class="profile-info-value">
											<a onclick="modalAlamatOrganisasi()" style="text-decoration:none;color:black">
												<span class="editable editable-click" id="ganti-alamat">{{ Organisasi::data()->alamat }}</span>
											</a>
										</div>
									</div>

									<div class="profile-info-row">
										<div class="profile-info-name"> Kota </div>
										<div class="profile-info-value">
											<a onclick="modalKotaOrganisasi()" style="text-decoration:none;color:black">
												<span class="editable editable-click" id="ganti-kota">{{ Organisasi::data()->kota }}</span>
											</a>
										</div>
									</div>

									<div class="profile-info-row">
										<div class="profile-info-name"> Provinsi </div>
										<div class="profile-info-value">
											<a onclick="modalProvinsiOrganisasi()" style="text-decoration:none;color:black">
												<span class="editable editable-click" id="ganti-provinsi">{{ Organisasi::data()->provinsi }}</span>
											</a>
										</div>
									</div>

									<div class="profile-info-row">
										<div class="profile-info-name"> Negara </div>
										<div class="profile-info-value">
											<a onclick="modalNegaraOrganisasi()" style="text-decoration:none;color:black">
												<span class="editable editable-click" id="ganti-negara">{{ Organisasi::data()->negara }}</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!--#organisasi-->

					<div id="akun" class="tab-pane">
						<div class="user-profile row-fluid">
							<div class="span3 center">
								<div>
									<span class="profile-picture">
										<a onclick="modalAvatar()">
											<img id="logo" class="editable" alt="Avatar" src="{{ asset('assets/img') }}/{{ Auth::user()->avatar }}" style="height:200px"></img>
										</a>
									</span>
								</div>
							</div>
							<div class="span9">
								<div class="space-12"></div>
								<div class="profile-user-info profile-user-info-striped">
									
									<div class="profile-info-row">
										<div class="profile-info-name"> Nama Tampilan </div>
										<div class="profile-info-value">
											<a onclick="modalNamaTampilan()" style="text-decoration:none;color:black">
												<span class="editable editable-click" id="ganti-nama_tampilan">{{ Auth::user()->nama_tampilan }}</span>
											</a>
										</div>
									</div>

									<div class="profile-info-row">
										<div class="profile-info-name"> Username </div>
										<div class="profile-info-value">
											<a onclick="modalUsername()" style="text-decoration:none;color:black">
												<span class="editable editable-click" id="ganti-username">{{ Auth::user()->username }}</span>
											</a>
										</div>
									</div>

									<div class="profile-info-row">
										<div class="profile-info-name"> Password </div>
										<div class="profile-info-value">
											<a onclick="modalPassword()" style="text-decoration:none;color:black">
												<span class="editable editable-click" id="ganti-password">klikuntukrubah***</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!--/#akun-->
				</div>
			</div>
		</div>
		
	</div><!--/span-->

</div>