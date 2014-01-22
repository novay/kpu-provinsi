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
		$daftar = Kabupaten::orderBy('created_at', 'DESC')->get();
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
			# koleksi variabel error lalu kirim
			$nama = $v->messages()->first('nama') ?: '';
			$status = '';
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
		$temp = Kabupaten::find($id);
		# Tampilkan halaman
		return View::make('_modal.ganti.kabupaten', compact('temp'));
	}

	/**
	 * Ganti isi database
	 */
	public function postGanti($id) 
	{
		# validasi
		$v = Validator::make(Input::all(), Kabupaten::$rules);
		# jika validasi tidak valid
		if ($v->fails()) {
			# koleksi variabel error lalu kirim
			$nama = $v->messages()->first('nama') ?: '';
			$status = '';
			return Response::json(compact('nama', 'status'));
		# jika validasi gagal	
		} else {
			# inputan dari form
			$nama = trim(Input::get('nama'));
			# Input data dalam database
			Kabupaten::ganti($id, $nama);
		} 
	}

	/**
	 * Lihat data
	 */
	public function getLihat($id) {
		$title = 'Kabupaten/Kota';
		# Sesuaikan id target
		$temp = Kabupaten::find($id);
		# Tampilkan halaman
		return View::make('_modal.lihat', compact('temp', 'title'));
	}

	/**
	 * Hapus data
	 */
	public function getHapus($id) {
		# Title Kontrol
		$title = 'Kabupaten/Kota';
		# Sesuaikan id target
		$temp = Kabupaten::find($id);
		# Tampilkan halaman
		return View::make('_modal.hapus', compact('title', 'temp'));
	}

	/**
	 * Hapus isi database
	 */
	public function postHapus($id) {
		# hapus isi database
		Kabupaten::hapus($id);
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