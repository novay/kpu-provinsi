function backupDB() {
	window.open(url_backup);
}

function modalRestore() {
	$('.modal').load(url_restore, function() {
		$('.modal').modal('show');
	});
}

function restoreDB() {
	$('.form-restore').ajaxSubmit({
		success: function(r) {		
			if (r.sql) {
				$('#control-sql').removeClass('info').addClass('error');
				$('#error-sql').text(r.sql);
			} else {
				$('.modal').modal('hide');
				$('.modal').html('');
				notif('Restorasi Basis Data Berhasil.', 'info');
				redirect();
			};
		}
	});
}

function redirect() {
	setTimeout(function() {
		$(location).prop('href', url_home);
	}, 3000);
}