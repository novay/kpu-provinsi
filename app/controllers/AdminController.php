<?php

class AdminController extends BaseController {

	/**
	  * @author : Noviyanto Rachmady ['novay@otaku.si']
	  **/

	/**
	 * Pemberian fungsi konstruksi untuk mem-filter aksi
	 */
	public function __construct() {
		# Koleksi filter
		$this->beforeFilter('auth',  ['except' => ['getLogin', 'postLogin']]);
		$this->beforeFilter('guest', ['only'   => ['getLogin']]);
		$this->beforeFilter('ajax',  ['except' => ['getIndex', 'getLogin']]);
		$this->beforeFilter('csrf', array('only' => array('postNama', 'postUser', 'postSandi', 'postAvatar')));
	}

	/**
	 * Halaman index
	 */
	public function getIndex() {
		# jika belum login, rujuk ke login
		if (Auth::guest()) return Redirect::to('login');
		# bila sudah, tampilkan
		return (Request::ajax()) ? Request::ajax() : View::make('_layouts.index');
	}

	/**
	 * Halaman login
	 */
	public function getLogin() {
		# tampilkan halaman login
		return View::make('_layouts.login');
	}

	/**
	 * Verifikasi akun
	 */
	public function postLogin() {
		# validasi
		$v = Validator::make(Input::all(), Admin::$rules);
		# jika validasi gagal
		if ($v->fails()) {
			# koleksi pesan error tiap variabel
			$username = $v->messages()->first('username') ?: '';
			$password = $v->messages()->first('password') ?: '';
			$status = '';
			# kirim json
			return Response::json(compact('username', 'password', 'status'));
		}
		# untuk validasi sukses, koleksi inputan form
		$username = trim(Input::get('username'));
		$password = trim(Input::get('password'));
		$ingat = (trim(Input::get('ingat')) == 1) ? true : false;
		# gabungan 2 variabel
		$userdata = compact('username', 'password');
		# proses pencocokan cocok
		if (Auth::attempt($userdata, $ingat)) {
			# kirim status sukses
			$status = 'sukses';
			return Response::json(compact('status'));
		# bila tidak cocok
		} else {
			# kirim status error
			$status = 'gagal';
			return Response::json(compact('status'));
		}
	}

	/**
	 * Logout akun
	 */
	public function logout() {
		# logout admin
		Auth::logout();
	}

	/**
	 * Semua Modal Pengguna
	 */
	public function getNama() { return View::make('_modal.pengaturan.akun.nama'); }
	public function getUser() { return View::make('_modal.pengaturan.akun.username'); }
	public function getSandi() { return View::make('_modal.pengaturan.akun.password'); }
	public function getAvatar() { return View::make('_modal.pengaturan.akun.avatar'); }
	
	/**
	 * Semua POST Pengguna
	 */
	## Untuk POST Nama Tampilan
	public function postNama() {
		# Validasi
		$input = Input::all();
		$rules = array('nama_tampilan' => 'required|min:2|nama_baru');
		$v = Validator::make($input, $rules);
		# Bila tak valid
		if ($v->fails()) {
			# Koleksi pesan error lalu kirim via json
			$nama_tampilan = $v->messages()->first('nama_tampilan') ?: '';
			return Response::json(compact('nama_tampilan'));
		}
		# tarik id admin aktif
		$id = Auth::user()->id;
		# tarik isi inputan form
		$nama_tampilan = ucwords(Input::get('nama_tampilan'));
		# Ubah isi database
		Admin::nama_tampilan($id, $nama_tampilan);
	}

	## Untuk POST Username
	public function postUser() {
		# Validasi
		$input = Input::all();
		$rules = array(
			'username_sekarang'   => 'required|min:5|max:20|username_sekarang',
			'username_baru' 	  => 'required|min:5|max:20|different:username_sekarang|unique:admin,username',
			'konfirmasi_username' => 'required|min:5|max:20|same:username_baru'
		);
		$v = Validator::make($input, $rules);
		# Bila tidak valid
		if ($v->fails()) {
			# Koleksi pesan error lalu kirim via json
			$username_sekarang	 = $v->messages()->first('username_sekarang') ?: '';
			$username_baru 		 = $v->messages()->first('username_baru') ?: '';
			$konfirmasi_username = $v->messages()->first('konfirmasi_username') ?: '';
			$status 			 = '';
			return Response::json(compact('username_sekarang', 'username_baru', 'konfirmasi_username', 'status'));
		}
		# Tarik id admin aktif
		$id = Auth::user()->id;
		# Ambil inputan username
		$username_baru = Input::get('username_baru');
		# Ubah database
		Admin::username($id, $username_baru);
	}

	## Untuk POST Password
	public function postSandi() {
		# Validasi
		$input = Input::all();
		$rules = array(
			'password_sekarang'   => 'required|min:6|password_sekarang',
			'password_baru'       => 'required|min:6|different:password_sekarang',
			'konfirmasi_password' => 'required|min:6|same:password_baru'
		);
		$v = Validator::make($input, $rules);
		# Untuk yg tdk valid
		if ($v->fails()) {
			# Koleksi pesan error lalu kirim
			$password_sekarang   = $v->messages()->first('password_sekarang') ?: '';
			$password_baru 		 = $v->messages()->first('password_baru') ?: '';
			$konfirmasi_password = $v->messages()->first('konfirmasi_password') ?: '';
			$status = '';
			return Response::json(compact('password_sekarang', 'password_baru', 'konfirmasi_password', 'status'));
		}
		# Tarik ID Admin yg aktif
		$id = Auth::user()->id;
		# Konversi password baru
		$password_baru = Hash::make(Input::get('password_baru'));
		# Dan ubah isi database
		Admin::password($id, $password_baru);
	}

	## Untuk POST Avatar
	public function postAvatar() {
		# Validasi
		$input = Input::all();
		$rules = array('avatar' => 'required|mimes:jpg,jpeg,png|max:5000');
		$v = Validator::make($input, $rules);
		# Bila tidak valid
		if ($v->fails()) {
			# Koleksi pesan error dan kirim via json
			$avatar = $v->messages()->first('avatar') ?: '';
			return Response::json(compact('avatar'));
		# Bila sukses
		} else {
			# Apa ada avatar yang di pilih? Jika ya...
			if (Input::hasFile('avatar')) {
				# tarik id admin aktif
				$id = Auth::user()->id;
				# buat nama avatar dengan ekstensinya berdasarkan tanggal skrg
				$avatar = date('dmYHis') . '.png';
				# jika admin memiliki avatar maka hapus avatar yang lama
				if (Auth::user()->avatar) unlink(public_path() . '/assets/img/' . Auth::user()->avatar);
				# unggah avatar baru ke direktori "assets/img"
				Input::file('avatar')->move(public_path() . '/assets/img', $avatar);
				# juga ubah isi database
				Admin::avatar($id, $avatar);
			# Jika tidak ada avatar
			} else {
				# buat pesan lalur kirim via json
				$avatar = 'Avatar yang diunggah gagal.';
				return Response::json(compact('avatar'));
			}
		}
	}
}