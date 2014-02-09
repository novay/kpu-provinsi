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
			notif('Nama Organisasi Anda berhasil diubah.', 'info');
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
			notif('Alamat Organisasi Anda berhasil diubah.', 'info');
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
			notif('Kota Organisasi Anda berhasil diubah.', 'info');
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
			notif('Provinsi Organisasi Anda berhasil diubah.', 'info');
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
			notif('Negara Organisasi Anda berhasil diubah.', 'info');
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
function modalUsername() {
	$('.modal').load(url_nama_pengguna, function() {
		$('.modal').modal('show');
	});
}
function modalPassword() {
	$('.modal').load(url_password, function() {
		$('.modal').modal('show');
	});
}
function modalAvatar() {
	$('.modal').load(url_avatar, function() {
		$('.modal').modal('show');
	});
}

