<?php

class KabupatenController extends BaseController {

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
		# Ambil isi tabel kabupaten, urutkan berdasarkan nama
		$daftar = Kabupaten::orderBy('nama', 'DESC')->get();
		# Tampilkan halaman tujuan
		return View::make('master.kabupaten', compact('daftar'));
	}

	/**
	 * Kehalaman tambah
	 */
	public function getBaru() {
		# Tampilkan halaman
		return View::make('_modal.tambah.kabupaten');
	}

	/**
	 * Input ke dalam database
	 */
	public function postBaru() {
		# validasi
		$v = Validator::make(Input::all(), Kabupaten::$rules);
		# jika validasi tidak valid
		if ($v->fails()) {
			# koleksi variabel error
			$nama = $v->messages()->first('nama') ?: '';
			$status = '';
			# Kirim nama
			return Response::json(compact('nama', 'status'));
		# jika validasi gagal	
		} else {
			# inputan dari form
			$nama = trim(Input::get('nama'));
			# Input data dalam database
			Kabupaten::tambah($nama);
		} 
	}

	/**
	 * Halaman ganti
	 */
	public function getGanti($id) {
		# Sesuaikan id target
		$kab = Kabupaten::find($id);
		# Tampilkan halaman
		return View::make('_partials.modal.kabupaten_ganti', compact('kab'));
	}

	/**
	 * Ganti isi database
	 */
	public function postGanti() 
	{
		# validasi
		$v = Validator::make(Input::all(), Kabupaten::$rules);
		# jika validasi valid
		if ($v->passes()) {
			# inputan dari form
			$nama = Input::get('nama');
			# Input data dalam database
			Kabupaten::ganti($nama);
		# jika validasi gagal	
		} else {
			# koleksi variabel error
			$nama = $v->messages()->first('nama') ?: '';
			$status = '';
			# Kirim nama
			return Response::json(compact('nama', 'status'));
		}  
	}

	/**
	 * Hapus data
	 */
	public function getHapus($id) {
		# Sesuaikan id target
		$kab = Kabupaten::find($id);
		# Tampilkan halaman
		return View::make('_partials.modal.kabupaten_hapus', compact('kab'));
	}

	/**
	 * Hapus isi database
	 */
	public function postHapus($id) {
		# hapus isi database
		Kabupaten::hapus($id);
	}

	/**
	 * Hapus semua data yang dipilih
	 */
	public function getHapusCeklis() {
		# tampilkan halaman
		return View::make('_partials.modal.kabupaten_hapus_daftar');
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
			Kabupaten::hapus($id[$i]['value']);
		}
	}

	/**
	 * Simpan ke halaman .XLS
	 */
	public function getExcel() {
		# kumpulkan data dari models
		$org = Organisasi::data();
		$kab = Kabupaten::orderBy('nama', 'DESC')->get();
		# tampilkan halaman
		return View::make('excel.kabupaten', compact('org', 'kab'));
	}

}