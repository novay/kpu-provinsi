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

// ################# Akhir Modal Lihat ###################### //

// ################# Modal Ubah ###################### //
function modalUbahKabupaten(n) {
	$('.modal').load(url_ubah_kabupaten + '/' + n, function() {
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

// ################# Akhir Fungsi Ubah ###################### //


// ################# Modal Hapus ###################### //
function modalHapusKabupaten(n) {
	$('.modal').load(url_hapus_kabupaten + '/' + n, function() {
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

// ################# Fungsi Hapus ###################### //


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

