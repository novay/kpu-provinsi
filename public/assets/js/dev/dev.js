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
function tambahKabupaten() {
	$('.modal').load(url_tambah_kabupaten, function() {
		$('.modal').modal('show');
	});
}
function tambahKecamatan() {
	$('.modal').load(url_tambah_kecamatan, function() {
		$('.modal').modal('show');
	});
}
function tambahKelurahan() {
	$('.modal').load(url_tambah_kelurahan, function() {
		$('.modal').modal('show');
	});
}
function tambahTps() {
	$('.modal').load(url_tambah_tps, function() {
		$('.modal').modal('show');
	});
}
// ################# Akhir Modal tambah ###################### //












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