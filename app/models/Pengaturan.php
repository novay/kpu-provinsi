
		'nama_tampilan'		  => 'required|max:50|nama_baru',
		'username_sekarang'   => 'required|min:5|max:20|username_sekarang',
		'username_baru' 	  => 'required|min:5|max:20|different:username_sekarang|unique:admin,username',
		'konfirmasi_username' => 'required|min:5|max:20|same:username_baru',
		'password_sekarang'   => 'required|min:6|password_sekarang',
		'password_baru'       => 'required|min:6|different:password_sekarang',
		'konfirmasi_password' => 'required|min:6|same:password_baru',
		'avatar' 			  => 'required|mimes:jpg,jpeg,png|max:5000'