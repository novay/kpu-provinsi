function dataKecamatan() {
	$('title').text('Data Kecamatan');
	$('.konten').load(url_kecamatan, function() { properti(); });
}

function modalTambahKecamatan() {
	$('.modal').load(url_tambah_kecamatan, function() {
		$(".chzn-select").chosen(); 
		$('.modal').modal('show');
	});
}

function enterTambahKecamatan(event) { 
	if (event.which == 13) { event.preventDefault(); tambahKecamatan(); }
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

function modalUbahKecamatan(n) {
	$('.modal').load(url_ubah_kecamatan + '/' + n, function() {
		$('.modal').modal('show');
	});
}

function enterUbahKecamatan(event) { 
	if (event.which == 13) { event.preventDefault(); ubahKecamatan(); }
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
				notif('Kecamatan berhasil di ubah.', 'info');
				dataKecamatan();
			};		
		}
	});
}

function modalHapusKecamatan(n) {
	$('.modal').load(url_hapus_kecamatan + '/' + n, function() {
		$('.modal').modal('show');
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

function modalLihatKecamatan(n) {
	$('.modal').load(url_lihat_kecamatan + '/' + n, function() {
		$('.modal').modal('show');
	});
}