function dataKabupaten() {
	$('title').text('Data Kabupaten');
	$('.konten').load(url_kabupaten, function() { properti(); });
}

function modalTambahKabupaten() {
	$('.modal').load(url_tambah_kabupaten, function() {
		$('.modal').modal('show');
	});
}

function enterTambahKabupaten(event) { 
	if (event.which == 13) { event.preventDefault(); tambahKabupaten(); }
} 

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

function modalUbahKabupaten(n) {
	$('.modal').load(url_ubah_kabupaten + '/' + n, function() {
		$('.modal').modal('show');
	});
}

function enterUbahKabupaten(event) { 
	if (event.which == 13) { event.preventDefault(); ubahKabupaten(); }
} 

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

function modalHapusKabupaten(n) {
	$('.modal').load(url_hapus_kabupaten + '/' + n, function() {
		$('.modal').modal('show');
	});
}

function hapusKabupaten(n) {
	$.post(url_hapus_kabupaten + '/' + n, { _token:token }, function(r) {
		$('.modal').modal('hide');
		$('.modal').html('');
		notif('Data Kabupaten berhasil dihapus.', 'info');
		dataKabupaten();
	});
}

function modalLihatKabupaten(n) {
	$('.modal').load(url_lihat_kabupaten + '/' + n, function() {
		$('.modal').modal('show');
	});
}

