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
		$daftar = Kecamatan::orderBy('created_at', 'DESC')->get();
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
		$temp = Kecamatan::find($id);
		# Tampilkan halaman
		return View::make('_modal.ganti.kecamatan', compact('temp'));
	}

	/**
	 * Ganti isi database
	 */
	public function postGanti($id) 
	{
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
			Kecamatan::ganti($id, $nama, $id_kabupaten);
		} 
	}

	/**
	 * Lihat data
	 */
	public function getLihat($id) {
		# Sesuaikan id target
		$temp = Kecamatan::find($id);
		# Tampilkan halaman
		return View::make('_modal.lihat.kecamatan', compact('temp'));
	}

	/**
	 * Hapus data
	 */
	public function getHapus($id) {
		# Title Kontrol
		$title = 'Kecamatan';
		# Onclick button
		$onclick = 'hapusKecamatan('.$id.')';
		# Sesuaikan id target
		$temp = Kecamatan::find($id);
		# Tampilkan halaman
		return View::make('_modal.hapus', compact('title', 'onclick', 'temp'));
	}

	/**
	 * Hapus isi database
	 */
	public function postHapus($id) {
		# hapus isi database
		Kecamatan::hapus($id);
	}

	/**
	 * Simpan ke halaman .XLS
	 */
	public function getExcel() {
		# kumpulkan data dari models
		$org = Organisasi::data();
		$temp = Kecamatan::orderBy('nama', 'DESC')->get();
		# tampilkan halaman
		return View::make('excel.kecamatan', compact('org', 'temp'));
	}

}