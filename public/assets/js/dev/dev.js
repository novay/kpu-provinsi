// ################# Master Link ###################### //
function dataKabupaten() {
	$('title').text('Data Kabupaten');
	$('.konten').load(url_kabupaten, function() { properti(); });
}
function dataKecamatan() {
	$('title').text('Data Kecamatan');
	$('.konten').load(url_kecamatan, function() { properti(); });
}
function dataKelurahan() {
	$('title').text('Data Kelurahan');
	$('.konten').load(url_kelurahan, function() { properti(); });
}
function dataTps() {
	$('title').text('Data TPS');
	$('.konten').load(url_tps, function() { properti(); });
}
// ################# Akhir Master Link ###################### //

// ################# Modal tambah ###################### //
function modalTambahKabupaten() {
	$('.modal').load(url_tambah_kabupaten, function() {
		$('.modal').modal('show');
	});
}
function modalTambahKecamatan() {
	$('.modal').load(url_tambah_kecamatan, function() {
		$('.modal').modal('show');
	});
}
function modalTambahKelurahan() {
	$('.modal').load(url_tambah_kelurahan, function() {
		$('.modal').modal('show');
	});
}
function modalTambahTps() {
	$('.modal').load(url_tambah_tps, function() {
		$('.modal').modal('show');
	});
}
// ################# Akhir Modal tambah ###################### //

// ################# Fungsi Enter tiap Bagian ###################### //
function enterTambahKabupaten(event) { 
	if (event.which == 13) { event.preventDefault(); tambahKabupaten(); }
} 
function enterTambahKecamatan(event) { 
	if (event.which == 13) { event.preventDefault(); tambahKecamatan(); }
} 
function enterTambahKelurahan(event) { 
	if (event.which == 13) { event.preventDefault(); tambahKelurahan(); }
} 
function enterTambahTps(event) { 
	if (event.which == 13) { event.preventDefault(); tambahTps(); }
} 
function enterUbahKabupaten(event) { 
	if (event.which == 13) { event.preventDefault(); ubahKabupaten(); }
} 
function enterUbahKecamatan(event) { 
	if (event.which == 13) { event.preventDefault(); ubahKecamatan(); }
} 
function enterUbahKelurahan(event) { 
	if (event.which == 13) { event.preventDefault(); ubahKelurahan(); }
} 
function enterUbahTps(event) { 
	if (event.which == 13) { event.preventDefault(); ubahTps(); }
} 
// ################# Fungsi Enter tiap Bagian ###################### //

// ################# Fungsi Tambah ###################### //
function tambahKabupaten() {
	$('.form-tambah-kabupaten').ajaxSubmit({
		success: function(r) {		
			if (r.status == '') {			
				if (r.nama) {
					$('#control-nama').removeClass('info').addClass('error');
					$('#error-nama').text(r.nama);
				} else {
					$('#control-nama').removeClass('error').addClass('info');
					$('#error-nama').text('');
				};
			} else {
				$('.modal').modal('hide');
				$('.modal').html('');
				notif('Kabupaten baru berhasil ditambah.', 'info');
				dataKabupaten();
			};		
		}
	});
}
function tambahKecamatan() {
	$('.form-tambah-kecamatan').ajaxSubmit({
		success: function(r) {		
			if (r.status == '') {			
				if (r.nama) {
					$('#control-nama').removeClass('info').addClass('error');
					$('#error-nama').text(r.nama);
				} else {
					$('#control-nama').removeClass('error').addClass('info');
					$('#error-nama').text('');
				};
				if (r.id_kabupaten) {
					$('#control-kabupaten').removeClass('info').addClass('error');
					$('#error-kabupaten').text(r.id_kabupaten);
				} else {
					$('#control-kabupaten').removeClass('error').addClass('info');
					$('#error-kabupaten').text('');
				};
			} else {
				$('.modal').modal('hide');
				$('.modal').html('');
				notif('Kecamatan baru berhasil ditambah.', 'info');
				dataKecamatan();
			};		
		}
	});
}
function tambahKelurahan() {
	$('.form-tambah-kelurahan').ajaxSubmit({
		success: function(r) {		
			if (r.status == '') {			
				if (r.nama) {
					$('#control-nama').removeClass('info').addClass('error');
					$('#error-nama').text(r.nama);
				} else {
					$('#control-nama').removeClass('error').addClass('info');
					$('#error-nama').text('');
				};
				if (r.id_kecamatan) {
					$('#control-kecamatan').removeClass('info').addClass('error');
					$('#error-kecamatan').text(r.id_kecamatan);
				} else {
					$('#control-kecamatan').removeClass('error').addClass('info');
					$('#error-kecamatan').text('');
				};
			} else {
				$('.modal').modal('hide');
				$('.modal').html('');
				notif('Kelurahan baru berhasil ditambah.', 'info');
				dataKelurahan();
			};		
		}
	});
}
function tambahTps() {
	$('.form-tambah-tps').ajaxSubmit({
		success: function(r) {		
			if (r.status == '') {			
				if (r.nama) {
					$('#control-nama').removeClass('info').addClass('error');
					$('#error-nama').text(r.nama);
				} else {
					$('#control-nama').removeClass('error').addClass('info');
					$('#error-nama').text('');
				};
			} else {
				$('.modal').modal('hide');
				$('.modal').html('');
				notif('TPS baru berhasil ditambah.', 'info');
				dataTps();
			};		
		}
	});
}
// ################# Akhir Fungsi Tambah ###################### //

// ################# Modal Lihat ###################### 
function modalLihatKabupaten(n) {
	$('.modal').load(url_lihat_kabupaten + '/' + n, function() {
		$('.modal').modal('show');
	});
}
function modalLihatKecamatan(n) {
	$('.modal').load(url_lihat_kecamatan + '/' + n, function() {
		$('.modal').modal('show');
	});
}
function modalLihatKelurahan(n) {
	$('.modal').load(url_lihat_kelurahan + '/' + n, function() {
		$('.modal').modal('show');
	});
}
function modalLihatTps(n) {
	$('.modal').load(url_lihat_tps + '/' + n, function() {
		$('.modal').modal('show');
	});
}
// ################# Akhir Modal Lihat ###################### //

// ################# Modal Ubah ###################### //
function modalUbahKabupaten(n) {
	$('.modal').load(url_ubah_kabupaten + '/' + n, function() {
		$('.modal').modal('show');
	});
}
function modalUbahKecamatan(n) {
	$('.modal').load(url_ubah_kecamatan + '/' + n, function() {
		$('.modal').modal('show');
	});
}
function modalUbahKelurahan(n) {
	$('.modal').load(url_ubah_kelurahan + '/' + n, function() {
		$('.modal').modal('show');
	});
}
function modalUbahTps(n) {
	$('.modal').load(url_ubah_tps + '/' + n, function() {
		$('.modal').modal('show');
	});
}
// ################# Akhir Modal Ubah ###################### //

// ################# Fungsi Ubah ###################### //
function ubahKabupaten() {
	$('.form-ubah-kabupaten').ajaxSubmit({
		success: function(r) {		
			if (r.status == '') {
				if (r.nama) {
					$('#control-nama').removeClass('info').addClass('error');
					$('#error-nama').text(r.nama);
				} else {
					$('#control-nama').removeClass('error').addClass('info');
					$('#error-nama').text('');
				};		
			} else {
				$('.modal').modal('hide');
				$('.modal').html('');
				notif('Kabupaten berhasil di ubah.', 'info');
				dataKabupaten();
			};		
		}
	});
}
function ubahKecamatan() {
	$('.form-ubah-kecamatan').ajaxSubmit({
		success: function(r) {		
			if (r.status == '') {
				if (r.nama) {
					$('#control-nama').removeClass('info').addClass('error');
					$('#error-nama').text(r.nama);
				} else {
					$('#control-nama').removeClass('error').addClass('info');
					$('#error-nama').text('');
				};		
			} else {
				$('.modal').modal('hide');
				$('.modal').html('');
				notif('Kecamatan berhasil di ubah.', 'info');
				dataKecamatan();
			};		
		}
	});
}
function ubahKelurahan() {
	$('.form-ubah-kelurahan').ajaxSubmit({
		success: function(r) {		
			if (r.status == '') {
				if (r.nama) {
					$('#control-nama').removeClass('info').addClass('error');
					$('#error-nama').text(r.nama);
				} else {
					$('#control-nama').removeClass('error').addClass('info');
					$('#error-nama').text('');
				};		
			} else {
				$('.modal').modal('hide');
				$('.modal').html('');
				notif('Kelurahan berhasil di ubah.', 'info');
				dataKelurahan();
			};		
		}
	});
}
function ubahTps() {
	$('.form-ubah-tps').ajaxSubmit({
		success: function(r) {		
			if (r.status == '') {
				if (r.nama) {
					$('#control-nama').removeClass('info').addClass('error');
					$('#error-nama').text(r.nama);
				} else {
					$('#control-nama').removeClass('error').addClass('info');
					$('#error-nama').text('');
				};		
			} else {
				$('.modal').modal('hide');
				$('.modal').html('');
				notif('TPS berhasil di ubah.', 'info');
				dataTps();
			};		
		}
	});
}
// ################# Akhir Fungsi Ubah ###################### //


// ################# Modal Hapus ###################### //
function modalHapusKabupaten(n) {
	$('.modal').load(url_hapus_kabupaten + '/' + n, function() {
		$('.modal').modal('show');
	});
}
function modalHapusKecamatan(n) {
	$('.modal').load(url_hapus_kecamatan + '/' + n, function() {
		$('.modal').modal('show');
	});
}
function modalHapusKelurahan(n) {
	$('.modal').load(url_hapus_kelurahan + '/' + n, function() {
		$('.modal').modal('show');
	});
}
function modalHapusTps(n) {
	$('.modal').load(url_hapus_tps + '/' + n, function() {
		$('.modal').modal('show');
	});
}
// ################# Akhir Modal Hapus ###################### //

// ################# Fungsi Hapus ###################### //
function hapusKabupaten(n) {
	$.post(url_hapus_kabupaten + '/' + n, { _token:token }, function(r) {
		$('.modal').modal('hide');
		$('.modal').html('');
		notif('Data Kabupaten berhasil dihapus.', 'info');
		dataKabupaten();
	});
}
function hapusKecamatan(n) {
	$.post(url_hapus_kecamatan + '/' + n, { _token:token }, function(r) {
		$('.modal').modal('hide');
		$('.modal').html('');
		notif('Data Kecamatan berhasil dihapus.', 'info');
		dataKecamatan();
	});
}
function hapusKelurahan(n) {
	$.post(url_hapus_kelurahan + '/' + n, { _token:token }, function(r) {
		$('.modal').modal('hide');
		$('.modal').html('');
		notif('Data Kelurahan berhasil dihapus.', 'info');
		dataKelurahan();
	});
}
function hapusTps(n) {
	$.post(url_hapus_tps + '/' + n, { _token:token }, function(r) {
		$('.modal').modal('hide');
		$('.modal').html('');
		notif('Data TPS berhasil dihapus.', 'info');
		dataTps();
	});
}
// ################# Fungsi Hapus ###################### //

// ################# Fungsi Hapus Daftar ###################### //
function modalHapusDaftarKabupaten() {
	var id = $('.id-kabupaten:checked').serializeArray();
	if (id.length > 0) {
		$('.modal').load(url_hapus_daftar_kabupaten, function() {
			$('.modal').modal('show');
		});
	} else {
		notif('Pilih dulu kabupaten yg ingin dihapus.', 'error');
	};
}
function hapusDaftarKabupaten() {
	var id = $('.id-kabupaten:checked').serializeArray();
	$.post(url_hapus_daftar_kabupaten, { id:id, _token:token }, function(r) {
		$('.modal').modal('hide');
		$('.modal').html('');
		notif('Data kabupaten berhasil dihapus.', 'info');
		dataKabupaten();
	});
}
// ################# Fungsi Hapus Daftar ###################### //


// Fungsi notifikasi
function notif(pesan, tipe) {
	Messenger().post({
		message:pesan,
		type:tipe,
		showCloseButton:true
	});
}

function properti() {
	$('.tip').tooltip();
	$('.type').typeahead({
		items: 5
	});

	$('.pagination a').click(function()
	{
		paginasi(this);
	});
}

$('.modal').on('shown', function()
{
	$('.input-focus').focus();
});

