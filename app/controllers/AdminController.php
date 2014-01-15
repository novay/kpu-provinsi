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

}