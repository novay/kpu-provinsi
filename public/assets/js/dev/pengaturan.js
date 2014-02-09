function dataPengaturan() {
	$('title').text('Pengaturan Aplikasi');
	$('.konten').load(url_pengaturan, function() { properti(); });
}

function modalNamaOrganisasi() {
	$('.modal').load(url_org_nama, function() {
		$('.modal').modal('show');
	});
}

function enterGantiNama(k) { if (k.which == 13) gantiNama(); }

function gantiNama() {
	var nama = $('#nama').val();
	$.post(url_org_nama, { nama:nama, _token:token }, function(r) {
		if (r.nama) {
			$('#control-nama').removeClass('info').addClass('error');
			$('#error-nama').text(r.nama);
		} else {
			$('.modal').modal('hide');
			$('.modal').html('');
			$('.brand small').text(nama);
			$('#ganti-nama').text(nama);
			notif('Perubahan Nama Organisasi sukses.', 'info');
		};
	});
}

function modalAlamatOrganisasi() {
	$('.modal').load(url_org_alamat, function() {
		$('.modal').modal('show');
	});
}

function enterGantiAlamat(k) { if (k.which == 13) gantiAlamat(); }

function gantiAlamat() {
	var alamat = $('#alamat').val();
	$.post(url_org_alamat, { alamat:alamat, _token:token }, function(r) {
		if (r.alamat) {
			$('#control-alamat').removeClass('info').addClass('error');
			$('#error-alamat').text(r.alamat);
		} else {
			$('.modal').modal('hide');
			$('.modal').html('');
			$('#ganti-alamat').text(alamat); 
			notif('Perubahan Alamat Organisasi sukses.', 'info');
		};
	});
}

function modalKotaOrganisasi() {
	$('.modal').load(url_org_kota, function() {
		$('.modal').modal('show');
	});
}

function enterGantiKota(k) { if (k.which == 13) gantiKota(); }

function gantiKota() {
	var kota = $('#kota').val();
	$.post(url_org_kota, { kota:kota, _token:token }, function(r) {
		if (r.kota) {
			$('#control-kota').removeClass('info').addClass('error');
			$('#error-kota').text(r.kota);
		} else {
			$('.modal').modal('hide');
			$('.modal').html('');
			$('#ganti-kota').text(kota);
			notif('Perubahan Kota Organisasi sukses.', 'info');
		};
	});
}

function modalProvinsiOrganisasi() {
	$('.modal').load(url_org_provinsi, function() {
		$('.modal').modal('show');
	});
}

function enterGantiProvinsi(k) { if (k.which == 13) gantiProvinsi(); }

function gantiProvinsi() {
	var provinsi = $('#provinsi').val();
	$.post(url_org_provinsi, { provinsi:provinsi, _token:token }, function(r) {
		if (r.provinsi) {
			$('#control-provinsi').removeClass('info').addClass('error');
			$('#error-provinsi').text(r.provinsi);
		} else {
			$('.modal').modal('hide');
			$('.modal').html('');
			$('#ganti-provinsi').text(provinsi);
			notif('Perubahan Provinsi Organisasi sukses.', 'info');
		};
	});
}

function modalNegaraOrganisasi() {
	$('.modal').load(url_org_negara, function() {
		$('.modal').modal('show');
	});
}

function enterGantiNegara(k) { if (k.which == 13) gantiNegara(); }

function gantiNegara() {
	var negara = $('#negara').val();
	$.post(url_org_negara, { negara:negara, _token:token }, function(r) {
		if (r.negara) {
			$('#control-negara').removeClass('info').addClass('error');
			$('#error-negara').text(r.negara);
		} else {
			$('.modal').modal('hide');
			$('.modal').html('');
			$('#ganti-negara').text(negara);
			notif('Perubahan Negara Organisasi sukses.', 'info');
		};
	});
}

function modalLogoOrganisasi() {
	$('.modal').load(url_org_logo, function() {
		$('.modal').modal('show');
	});
}



function modalNamaTampilan() {
	$('.modal').load(url_nama_tampilan, function() {
		$('.modal').modal('show');
	});
}

function enterGantiNamaTampilan(k) { if (k.which == 13) gantiNamaTampilan(); }

function gantiNamaTampilan() {
	var nama_tampilan = $('#nama_tampilan').val();
	$.post(url_nama_tampilan, { nama_tampilan:nama_tampilan, _token:token }, function(r) {
		if (r.nama_tampilan) {
			$('#control-nama').removeClass('info').addClass('error');
			$('#error-nama').text(r.nama_tampilan);
		} else {
			$('.modal').modal('hide');
			$('.modal').html('');
			$('#ganti-nama_tampilan').text(nama_tampilan);
			$('#ganti-nama_tampilan2').text(nama_tampilan);
			notif('Perubahan Nama Tampilan sukses.', 'info');
		};
	});
}

function modalUsername() {
	$('.modal').load(url_nama_pengguna, function() {
		$('.modal').modal('show');
	});
}

function enterGantiUsername(k) { if (k.which == 13) gantiUsername(); }

function gantiUsername() {
	var username_sekarang = $('#username_sekarang').val().trim();
	var username_baru = $('#username_baru').val().trim();
	var konfirmasi_username = $('#konfirmasi_username').val().trim();

	$.post(url_nama_pengguna, { username_sekarang:username_sekarang, username_baru:username_baru, konfirmasi_username:konfirmasi_username, _token:token }, function(r) {
		if (r.status == '') {
			if (r.username_sekarang) {
				$('#control-username-sekarang').removeClass('info').addClass('error');
				$('#error-username-sekarang').text(r.username_sekarang);
			} else {
				$('#control-username-sekarang').removeClass('error').addClass('info');
				$('#error-username-sekarang').text('');
			};

			if (r.username_baru) {
				$('#control-username-baru').removeClass('info').addClass('error');
				$('#error-username-baru').text(r.username_baru);
			} else {
				$('#control-username-baru').removeClass('error').addClass('info');
				$('#error-username-baru').text('');
			};

			if (r.konfirmasi_username) {
				$('#control-konfirmasi-username').removeClass('info').addClass('error');
				$('#error-konfirmasi-username').text(r.konfirmasi_username);
			} else {
				$('#control-konfirmasi-username').removeClass('error').addClass('info');
				$('#error-konfirmasi-username').text('');
			};
		} else {
			$('.modal').modal('hide');
			$('.modal').html('');
			$('#ganti-username').text(username_baru);
			notif('Perubahan Nama Pengguna sukses.', 'info');
		};
	});
}

function modalPassword() {
	$('.modal').load(url_password, function() {
		$('.modal').modal('show');
	});
}

function enterGantiPassword(k) { if (k.which == 13) gantiPassword(); }

function gantiPassword() {
	var password_sekarang = $('#password_sekarang').val().trim();
	var password_baru = $('#password_baru').val().trim();
	var konfirmasi_password = $('#konfirmasi_password').val().trim();

	$.post(url_password, { password_sekarang:password_sekarang, password_baru:password_baru, konfirmasi_password:konfirmasi_password, _token:token }, function(r)
	{
		if (r.status == '')
		{
			if (r.password_sekarang)
			{
				$('#control-password-sekarang').removeClass('info').addClass('error');
				$('#error-password-sekarang').text(r.password_sekarang);
			} else {
				$('#control-password-sekarang').removeClass('error').addClass('info');
				$('#error-password-sekarang').text('');
			};

			if (r.password_baru)
			{
				$('#control-password-baru').removeClass('info').addClass('error');
				$('#error-password-baru').text(r.password_baru);
			} else {
				$('#control-password-baru').removeClass('error').addClass('info');
				$('#error-password-baru').text('');
			};

			if (r.konfirmasi_password)
			{
				$('#error-konfirmasi-password').text(r.konfirmasi_password);
			} else {
				$('#error-konfirmasi-password').text('');
			};

			$('.modal').find('.control-group').addClass('error');
			$('.modal').find('input').val('');
		} else {
			$('.modal').modal('hide');
			$('.modal').html('');
			$('#ganti-password').text('Perubahan Password sukses. Ubah lagi?');
			notif('Perubahan Kata Sandi sukses.', 'info');
		};
	});
}

function modalAvatar() {
	$('.modal').load(url_avatar, function() {
		$('.modal').modal('show');
	});
}

