<?php

class PengaturanController extends BaseController {

	/**
	  * @author : Noviyanto Rachmady ['novay@otaku.si']
	  **/

	/**
	 * Pemberian fungsi konstruksi untuk mem-filter aksi
	 */
	public function __construct() {
		# Koleksi filter
		$this->beforeFilter('auth');
		$this->beforeFilter('ajax', array('except' => array('excel')));
		$this->beforeFilter('csrf', array('on' => 'post'));
	}

	/**
	 * Halaman index
	 */
	public function getIndex() {
		# Tampilkan halaman tujuan
		return View::make('master.pengaturan');
	}

	

	public function postRubahFoto()
	{
		// validasi
		$input = Input::all();
		$rules = array('foto' => 'required|mimes:jpg,jpeg,png|max:5000');
		$validasi = Validator::make(Input::all(), $rules);

		// tidak valid
		if ($validasi->fails()) {
			// pesan
			$foto = $validasi->messages()->first('foto') ?: '';
			
			return Response::json(compact('foto'));

		// valid
		} else {
			// ada foto
			if (Input::hasFile('foto')) {
				// id admin
				$id = Auth::user()->id;
				
				// nama foto
				$foto = date('dmYHis') . '.png';

				// jika admin mempunyai foto maka hapus foto yang dulu
				if (Auth::user()->foto) unlink(public_path() . '/foto/admin/' . Auth::user()->foto);
				
				// unggah foto ke dir "foto/admin"
				Input::file('foto')->move('foto/admin', $foto);
				
				// rubah data di basisdata
				Admin::rubahFoto($id, $foto);

			// tidak ada foto
			} else {
				// pesan
				$foto = 'Foto gagal diunggah.';
				
				return Response::json(compact('foto'));
			}
		}
	}

	public function getRubahNama()
	{
		return View::make('modal.nama');
	}

	public function postRubahNama()
	{
		// validasi
		$input = Input::all();
		$rules = array('nama' => 'required|max:50|nama_baru');
		$validasi = Validator::make(Input::all(), $rules);

		// tidak valid
		if ($validasi->fails()) {
			// pesan
			$nama = $validasi->messages()->first('nama') ?: '';
			
			return Response::json(compact('nama'));
		}

		// id admin
		$id = Auth::user()->id;
		
		// input nama
		$nama = ucwords(Input::get('nama'));

		// rubah data di basisdata
		Admin::rubahNama($id, $nama);
	}

	public function getRubahUsername()
	{
		return View::make('modal.username');
	}

	public function postRubahUsername()
	{
		// validasi
		$input = Input::all();
		$rules = array(
			'username_sekarang' => 'required|min:5|max:20|username_sekarang',
			'username_baru' => 'required|min:5|max:20|different:username_sekarang|unique:admin,username',
			'konfirmasi_username' => 'required|min:5|max:20|same:username_baru',
		);
		$validasi = Validator::make(Input::all(), $rules);

		// tidak valid
		if ($validasi->fails()) {
			// pesan
			$username_sekarang = $validasi->messages()->first('username_sekarang') ?: '';
			$username_baru = $validasi->messages()->first('username_baru') ?: '';
			$konfirmasi_username = $validasi->messages()->first('konfirmasi_username') ?: '';
			$status = '';

			return Response::json(compact('username_sekarang', 'username_baru', 'konfirmasi_username', 'status'));
		}

		// id admin
		$id = Auth::user()->id;

		// input
		$username_baru = Input::get('username_baru');
		
		// rubah data di basisdata
		Admin::rubahUsername($id, $username_baru);
	}

	public function getRubahPassword()
	{
		return View::make('modal.password');
	}

	public function postRubahPassword()
	{
		// validasi
		$input = Input::all();
		$rules = array(
			'password_sekarang' => 'required|min:6|password_sekarang',
			'password_baru' => 'required|min:6|different:password_sekarang',
			'konfirmasi_password' => 'required|min:6|same:password_baru',
		);
		$validasi = Validator::make(Input::all(), $rules);

		// tidak valid
		if ($validasi->fails()) {
			// pesan
			$password_sekarang = $validasi->messages()->first('password_sekarang') ?: '';
			$password_baru = $validasi->messages()->first('password_baru') ?: '';
			$konfirmasi_password = $validasi->messages()->first('konfirmasi_password') ?: '';
			$status = '';

			return Response::json(compact('password_sekarang', 'password_baru', 'konfirmasi_password', 'status'));
		}

		// id admin
		$id = Auth::user()->id;
		
		// input
		$password_baru = Hash::make(Input::get('password_baru'));
		
		// rubah data di basisdata
		Admin::rubahPassword($id, $password_baru);
	}
	

}