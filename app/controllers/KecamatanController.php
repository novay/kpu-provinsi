<?php

class KecamatanController extends BaseController {

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
		# Ambil isi tabel Kecamatan, urutkan berdasarkan nama
		$daftar = Kecamatan::orderBy('nama', 'DESC')->get();
		# Tampilkan halaman tujuan
		return View::make('master.kecamatan', compact('daftar'));
	}

	/**
	 * Kehalaman tambah
	 */
	public function getBaru() {
		# Tampilkan halaman
		return View::make('_modal.tambah.kecamatan');
	}

	/**
	 * Input ke dalam database
	 */
	public function postBaru() {
		# validasi
		$v = Validator::make(Input::all(), Kecamatan::$rules);
		# jika validasi tidak valid
		if ($v->fails()) {
			# koleksi variabel error lalu kirim
			$nama = $v->messages()->first('nama') ?: '';
			$id_kabupaten = $v->messages()->first('id_kabupaten') ?: '';
			$status = '';
			return Response::json(compact('nama', 'id_kabupaten', 'status'));
		# jika validasi gagal	
		} else {
			# inputan dari form
			$nama = trim(Input::get('nama'));
			$id_kabupaten = Input::get('id_kabupaten');
			# Input data dalam database
			Kecamatan::tambah($nama, $id_kabupaten);
		} 
	}

	/**
	 * Halaman ganti
	 */
	public function getGanti($id) {
		# Sesuaikan id target
		$kab = Kecamatan::find($id);
		# Tampilkan halaman
		return View::make('_partials.modal.kecamatan_ganti', compact('kab'));
	}

	/**
	 * Ganti isi database
	 */
	public function postGanti() 
	{
		# validasi
		$v = Validator::make(Input::all(), Kecamatan::$rules);
		# jika validasi valid
		if ($v->passes()) {
			# inputan dari form
			$nama = Input::get('nama');
			$id_kabupaten = Input::get('id_kabupaten');
			# Input data dalam database
			Kecamatan::ganti($nama, $id_kabupaten);
		# jika validasi gagal	
		} else {
			# koleksi variabel error
			$nama = $v->messages()->first('nama') ?: '';
			$id_kabupaten = $v->messages()->first('id_kabupaten') ?: '';
			$status = '';
			# Kirim nama
			return Response::json(compact('nama', 'id_kabupaten', 'status'));
		}  
	}

	/**
	 * Hapus data
	 */
	public function getHapus($id) {
		# Sesuaikan id target
		$kab = Kecamatan::find($id);
		# Tampilkan halaman
		return View::make('_partials.modal.kecamatan_hapus', compact('kab'));
	}

	/**
	 * Hapus isi database
	 */
	public function postHapus($id) {
		# hapus isi database
		Kecamatan::hapus($id);
	}

	/**
	 * Hapus semua data yang dipilih
	 */
	public function getHapusCeklis() {
		# tampilkan halaman
		return View::make('_partials.modal.kecamatan_hapus_daftar');
	}

	/**
	 * Hapus semua isi database yang dipilih
	 */
	public function postHapusCeklis() {
		# buat variabel untuk menampung id
		$id = Input::get('id');
		# untuk nilai i = 0, selama nilai i lebih kecil dari $id, 
		# lakukan perulangan dengan menambahkan 1 setiap putarannya
		for ($i = 0; $i<count($id); $i++) {
			# hapus isi database
			Kecamatan::hapus($id[$i]['value']);
		}
	}

	/**
	 * Simpan ke halaman .XLS
	 */
	public function getExcel() {
		# kumpulkan data dari models
		$org = Organisasi::data();
		$kab = Kecamatan::orderBy('nama', 'DESC')->get();
		# tampilkan halaman
		return View::make('excel.kecamatan', compact('org', 'kab'));
	}

}