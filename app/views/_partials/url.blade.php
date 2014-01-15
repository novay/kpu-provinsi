<script type="text/javascript">
	var url_home   = '{{ route('home') }}';
	var url_login  = '{{ route('login') }}';
	var url_logout = '{{ route('logout') }}';
	// Master Link
	var url_kabupaten = '{{ route('kabupaten') }}';
	var url_kecamatan = '{{ route('kecamatan') }}';
	var url_kelurahan = '{{ route('kelurahan') }}';
	var url_tps		  = '{{ route('tps') }}';
	// Modal Tambah
	var url_tambah_kabupaten = '{{ route('kabupaten_baru') }}';
	var url_tambah_kecamatan = '{{ route('kecamatan_baru') }}';
	var url_tambah_kelurahan = '{{ route('kelurahan_baru') }}';
	var url_tambah_tps		 = '{{ route('tps_baru') }}';

	var url_backup 	   = '{{ route('backup') }}';
	var url_restore    = '{{ route('restore') }}';
	var token 		   = '{{ csrf_token() }}';
</script>