<?php

class SatpamController extends BaseController {

	/**
	  * @author : Noviyanto Rachmady ['novay@otaku.si']
	  **/

	/**
	 * Pemberian fungsi konstruksi untuk mem-filter aksi
	 */
	public function __construct() {
		# Filter
		$this->beforeFilter('auth', array('except' => array('getLogin', 'postLogin')));
		$this->beforeFilter('guest', array('only' => array('getLogin')));
		$this->beforeFilter('ajax', array('except' => array('getIndex', 'getLogin')));
	}

	/**
	 * Halaman index
	 */
	public function getIndex() {
		# Jika user bertindak sebagai tamu, rujuk ke login
		if (Auth::guest()) return Redirect::to('login');
		# jika sudah login kategorikan tujuan, untuk administrator
		return (Request::ajax()) ? Request::ajax() : View::make('index');
	}

	/**
	 * Halaman login
	 */
	public function getLogin() {
		# Tampilkan halaman
		return View::make('digilib.login');
	}

	/**
	 * Verifikasi login ke dalam database
	 */
	public function postLogin() {
		# Validasi inputan
		$v = Validator::make(Input::all(), Satpam::$rules);
		# Jika validasi berhasil
		if ($v->passes()) {
			# tarik isi form ke masing-masing variabel
			$username = trim(Input::get('username'));
			$password = trim(Input::get('password'));
			$ingat = trim((Input::get('ingat')) == 1) ? true : false;
			# gabungkan 2 variabel dalam 1 paket untuk autentikasi
			$userdata = compact('username', 'password');
			# jika cocok
			if (Auth::attempt($userdata, $ingat)) {
				# buat variabel status berisi 'sukses'
				$status = 'sukses';
				# kirim variabel
				return Response::json(compact('status'));
			# jika tidak cocok
			} else {
				# buat variabel status selain berisi 'sukses'
				$status = 'gagal';
				# kirim variabel
				return Response::json(compact('status'));
			}
		# sedang, jika validasi gagal
		} else {
			# koleksi pesan error ke masing-masing variabel
			$username = $v->messages()->first('username') ?: '';
			$password = $v->messages()->first('password') ?: '';
			$status = ''; # buat status isi kosong untuk kondisional
			# kirim variabel
			return Response::json(compact('username', 'password', 'status'));
		}
	}

}