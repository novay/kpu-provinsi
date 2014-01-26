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
	// Modal Hapus
	var url_hapus_kabupaten = '{{ route('hapus_kabupaten') }}';
	var url_hapus_kecamatan = '{{ route('hapus_kecamatan') }}';
	var url_hapus_kelurahan = '{{ route('hapus_kelurahan') }}';
	var url_hapus_tps	    = '{{ route('hapus_tps') }}';
	// Modal Ubah
	var url_ubah_kabupaten = '{{ route('ubah_kabupaten') }}';
	var url_ubah_kecamatan = '{{ route('ubah_kecamatan') }}';
	var url_ubah_kelurahan = '{{ route('ubah_kelurahan') }}';
	var url_ubah_tps	   = '{{ route('ubah_tps') }}';
	// Modal Lihat
	var url_lihat_kabupaten = '{{ route('lihat_kabupaten') }}';
	var url_lihat_kecamatan = '{{ route('lihat_kecamatan') }}';
	var url_lihat_kelurahan = '{{ route('lihat_kelurahan') }}';

	var url_backup 	   = '{{ route('backup') }}';
	var url_restore    = '{{ route('restore') }}';
	var token 		   = '{{ csrf_token() }}';
</script>