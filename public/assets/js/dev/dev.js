function dataKabupaten() {
	$('title').text('Data Kabupaten');
	$('.konten').load(url_kabupaten, function() { properti(); });
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