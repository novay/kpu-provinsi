function dataKelurahan() {
	$('title').text('Data Kelurahan');
	$('.konten').load(url_kelurahan, function() { properti(); });
}

function modalTambahKelurahan() {
	$('.modal').load(url_tambah_kelurahan, function() {
		$(".chzn-select").chosen(); 
		$('.modal').modal('show');
	});
}

function enterTambahKelurahan(event) { 
	if (event.which == 13) { event.preventDefault(); tambahKelurahan(); }
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

function modalUbahKelurahan(n) {
	$('.modal').load(url_ubah_kelurahan + '/' + n, function() {
		$('.modal').modal('show');
	});
}

function enterUbahKelurahan(event) { 
	if (event.which == 13) { event.preventDefault(); ubahKelurahan(); }
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
				notif('Kelurahan berhasil di ubah.', 'info');
				dataKelurahan();
			};		
		}
	});
}

function modalHapusKelurahan(n) {
	$('.modal').load(url_hapus_kelurahan + '/' + n, function() {
		$('.modal').modal('show');
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

function modalLihatKelurahan(n) {
	$('.modal').load(url_lihat_kelurahan + '/' + n, function() {
		$('.modal').modal('show');
	});
}