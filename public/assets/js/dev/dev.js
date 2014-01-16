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
function enterTambahKabupaten(k) { if (k.which == 13) tambahKabupaten(); }
function enterTambahKelurahan(k) { if (k.which == 13) tambahKelurahan(); }
function enterTambahKecamatan(k) { if (k.which == 13) tambahKecamatan(); }
function enterTambahTps(k)       { if (k.which == 13) tambahTps(); }
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

