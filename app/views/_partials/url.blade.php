<script type="text/javascript">
	var url_home       = '{{ route('home') }}';
	var url_login      = '{{ route('login') }}';
	var url_logout     = '{{ route('logout') }}';
	var url_kabupaten  = '{{ route('kabupaten') }}';
	
	var url_backup 	   = '{{ route('backup') }}';
	var url_restore    = '{{ route('restore') }}';
	var token 		   = '{{ csrf_token() }}';
</script>