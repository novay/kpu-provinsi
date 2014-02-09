function dataTps() {
	$('title').text('Data TPS');
	$('.konten').load(url_tps, function() { properti(); });
}

function modalTambahTps() {
	$('.modal').load(url_tambah_tps, function() {
		$(".chzn-select").chosen(); 
		$('.modal').modal('show');
	});
}

function enterTambahTps(event) { 
	if (event.which == 13) { event.preventDefault(); tambahTps(); }
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
				if (r.id_kelurahan) {
					$('#control-kelurahan').removeClass('info').addClass('error');
					$('#error-kelurahan').text(r.id_kelurahan);
				} else {
					$('#control-kelurahan').removeClass('error').addClass('info');
					$('#error-kelurahan').text('');
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

function modalUbahTps(n) {
	$('.modal').load(url_ubah_tps + '/' + n, function() {
		$('.modal').modal('show');
	});
}

function enterUbahTps(event) { 
	if (event.which == 13) { event.preventDefault(); ubahTps(); }
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
				if (r.id_kelurahan) {
					$('#control-kelurahan').removeClass('info').addClass('error');
					$('#error-kelurahan').text(r.id_kelurahan);
				} else {
					$('#control-kelurahan').removeClass('error').addClass('info');
					$('#error-kelurahan').text('');
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

function modalHapusTps(n) {
	$('.modal').load(url_hapus_tps + '/' + n, function() {
		$('.modal').modal('show');
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

function modalLihatTps(n) {
	$('.modal').load(url_lihat_tps + '/' + n, function() {
		$('.modal').modal('show');
	});
}