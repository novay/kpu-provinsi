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
	$('.type').typeahead( {
		items: 5
	});

	$('.pagination a').click(function() {
		paginasi(this);
	});
}

$('.modal').on('shown', function() {
	$('.input-focus').focus();
});