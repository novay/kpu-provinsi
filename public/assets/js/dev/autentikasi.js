// fungsi enter, 13 = enter, -> eksekusi fungsi login
$('input').keypress(function(k) { if (k.which == 13) login(); });
// logika fungsi Login
function login() {
	// koleksi variabel dari form
	var username = $('#username').val().trim();
	var password = $('#password').val().trim();
	var ingat = $('#ingat').is(':checked') ? 1 : 0;
	// eksekusi
	$.post(url_login, { username:username, password:password, ingat:ingat }, function(r) {
		// jika status yg diterima ''
		if (r.status == '') {
			// jika username tidak sama dengan ''
			if (r.username != '') {
				// ubah class berdasarkan id  masing-masing
				$('#control-username').removeClass('info').addClass('error');
				$('#error-username').text(r.username);
				$('#password').val('');
			// sedang, bila username = ''
			} else {
				// tambah class jadi info berdasarkan id
				$('#control-username').removeClass('error').addClass('info');
				$('#error-username').text('');
			};
			// untuk password, penjelasan sama
			if (r.password != '') {
				$('#control-password').removeClass('info').addClass('error');
				$('#error-password').text(r.password);
				$('#password').val('');
			} else {
				$('#control-password').addClass('error');
				$('#error-password').text('');
			};
		// sedang, jika status tidak kosong
		} else {
			// untuk nilai value sukses
			if (r.status == 'sukses') {
				// rujuk ke url_home
				$(location).prop('href', url_home);
			// selain sukses, eksekusi ini
			} else {
				// hapus semua class dan pesan error kmudian fokuskan kursor ke username
				$('.control-group').removeClass('info error').find('input, .help-block').val('').text('');
				$('#username').focus();
				// tampilkan notifikasi
				Messenger().post({
					message: 'Username dan password ngawur.',
					type: 'error',
					showCloseButton: true
				});
			};
		};
	}, "json");
}
// fungsi logout
function logout() {
	$.get(url_logout, function() {
		$(location).prop('href', url_login);
	});
}