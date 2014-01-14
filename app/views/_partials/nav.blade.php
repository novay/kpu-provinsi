<div class="navbar">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a href="#" class="brand">
				<small>{{{ Organisasi::data()->nama }}}</small>
			</a><!--/.brand-->
			<ul class="nav ace-nav">
				<li class="light-blue">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-folder-close"></i> Data Master <i class="icon-caret-down"></i></a>
					<ul class="dropdown-navbar dropdown-menu dropdown-caret ">
						<li class="nav-header"><i class="icon-ok"></i> Pilih Salah Satu Master :</li>
						<li id="link-kabupaten">
							<a onclick="dataKabupaten()">
								<div class="clearfix">
									<span class="pull-left">Kabupaten</span>
									<span class="pull-right label arrowed">12</span>
								</div>
							</a>
						</li>
						<li id="link-kecamatan">
							<a onclick="dataKecamatan()">
								<div class="clearfix">
									<span class="pull-left">Kecamatan</span>
									<span class="pull-right label arrowed">12</span>
								</div>
							</a>
						</li>
						<li id="link-kelurahan">
							<a onclick="dataKelurahan()">
								<div class="clearfix">
									<span class="pull-left">Kelurahan</span>
									<span class="pull-right label arrowed">12</span>
								</div>
							</a>
						</li>
						<li id="link-tps">
							<a onclick="dataTps()">
								<div class="clearfix">
									<span class="pull-left">TPS</span>
									<span class="pull-right label arrowed">12</span>
								</div>
							</a>
						</li>
						<li></li>
					</ul>
				</li>
			</ul>
			<ul class="nav ace-nav pull-right">
				<li class="light-blue">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-hdd"></i> Database <i class="icon-caret-down"></i></a>
					<ul class="dropdown-navbar dropdown-menu dropdown-caret ">
						<li><a onclick="backup()"><i class="icon-download-alt"></i> Backup Database</a></li>
						<li><a onclick="modalRestore()"><i class="icon-upload-alt"></i> Restore Database</a></li>
						<li></li>
					</ul>
				</li>
				<li class="light-blue">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
						<img class="nav-user-photo" src="{{ asset('assets/img/user.jpg') }}" alt="Foto Novay" />
						<span class="user-info">
							<small>Selamat Datang,</small>
							{{{ Auth::user()->nama_tampilan }}}
						</span>

						<i class="icon-caret-down"></i>
					</a>
					<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
						<li><a href="#"><i class="icon-cog"></i> Settings</a></li>
						<li><a href="#"><i class="icon-user"></i> Profile</a></li>
						<li class="divider"></li>
						<li><a onclick="logout()"><i class="icon-off"></i> Logout</a></li>
					</ul>
				</li>
			</ul><!--/.ace-nav-->
		</div><!--/.container-fluid-->
	</div><!--/.navbar-inner-->
</div>