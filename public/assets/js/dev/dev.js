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









function properti() {
	$('.tip').tooltip();

	$('.tanggal').datepicker({
		format: 'dd-mm-yyyy',
		autoclose: true,
		language: 'id'
	});

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