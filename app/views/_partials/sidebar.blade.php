<div class="sidebar fixed" id="sidebar">

	<ul class="nav nav-list">
		<li class="center ace-nav active">
			<br/><img class="nav-user-photo" src="{{ asset('assets/img') }}/{{Auth::user()->avatar}}" alt="Foto Novay" style="margin-bottom:10px"/> Hai, <span id="ganti-nama_tampilan2">{{{ Auth::user()->nama_tampilan }}}</span>
		</li>
		<li class="">
			<a href="{{ route('home') }}">
				<i class="icon-home"></i>
				<span class="menu-text"> Beranda </span>
			</a>
		</li>

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="icon-desktop"></i>
				<span class="menu-text"> Data Master </span>
				<b class="arrow icon-angle-down"></b>
			</a>

			<ul class="submenu" style="display: block;">
				<li>
					<a onclick="dataKabupaten()">
						<i class="icon-double-angle-right"></i>
						Kabupaten / Kota
						<span class="badge badge-primary "><small>{{ Kabupaten::all()->count() }}</small></span>
					</span>
					</a>
				</li>

				<li>
					<a onclick="dataKecamatan()">
						<i class="icon-double-angle-right"></i>
						Kecamatan
						<span class="badge badge-primary "><small>{{ Kecamatan::all()->count() }}</small></span>
					</a>
				</li>

				<li>
					<a onclick="dataKelurahan()">
						<i class="icon-double-angle-right"></i>
						Kelurahan / Desa
						<span class="badge badge-primary "><small>{{ Kelurahan::all()->count() }}</small></span>
					</a>
				</li>

				<li>
					<a onclick="dataTps()">
						<i class="icon-double-angle-right"></i>
						TPS
						<span class="badge badge-primary "><small>{{ Tps::all()->count() }}</small></span>
					</a>
				</li>
			</ul>
		</li>

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="icon-hdd"></i>
				<span class="menu-text"> Kelola Database </span>
				<b class="arrow icon-angle-down"></b>
			</a>

			<ul class="submenu" style="display: block;">
				<li>
					<a onclick="backup()">
						<i class="icon-double-angle-right"></i>
						<i class="icon-download-alt"></i> Backup
					</span>
					</a>
				</li>

				<li>
					<a onclick="modalRestore()">
						<i class="icon-double-angle-right"></i>
						<i class="icon-upload-alt"></i> Restore
					</a>
				</li>
			</ul>
		</li>

		<li>
			<a onclick="dataPengaturan()">
				<i class="icon-cogs"></i>
				<span class="menu-text"> Pengaturan </span>
			</a>
		</li>

		<li>
			<a onclick="logout()">
				<i class="icon-off"></i>
				<span class="menu-text"> Logout </span>
			</a>
		</li>

	</ul><!--/.nav-list-->

	<div class="sidebar-collapse" id="sidebar-collapse">
		<i class="icon-double-angle-left"></i>
	</div>
</div>