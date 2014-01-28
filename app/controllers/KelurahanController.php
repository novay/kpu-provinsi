<?php

class KelurahanController extends BaseController {

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
		$daftar = Kelurahan::orderBy('created_at', 'DESC')->get();
		# Tampilkan halaman tujuan
		return View::make('master.kelurahan', compact('daftar'));
	}

	/**
	 * Kehalaman tambah
	 */
	public function getBaru() {
		# Tampilkan halaman
		return View::make('_modal.tambah.kelurahan');
	}

	/**
	 * Input ke dalam database
	 */
	public function postBaru() {
		# validasi
		$v = Validator::make(Input::all(), Kelurahan::$rules);
		# jika validasi tidak valid
		if ($v->fails()) {
			# koleksi variabel error lalu kirim
			$nama = $v->messages()->first('nama') ?: '';
			$id_kecamatan = $v->messages()->first('id_kecamatan') ?: '';
			$status = '';
			return Response::json(compact('nama', 'id_kecamatan', 'status'));
		# jika validasi gagal	
		} else {
			# inputan dari form
			$nama = Input::get('nama');
			$id_kecamatan = Input::get('id_kecamatan');
			# untuk id_kabupaten
			$id_kabupaten = Kecamatan::find($id_kecamatan)->id_kabupaten;
			# Input data dalam database
			Kelurahan::tambah($nama, $id_kecamatan, $id_kabupaten);
		} 
	}

	/**
	 * Halaman ganti
	 */
	public function getGanti($id) {
		# Sesuaikan id target
		$temp = Kelurahan::find($id);
		# Tampilkan halaman
		return View::make('_modal.ganti.kelurahan', compact('temp'));
	}

	/**
	 * Ganti isi database
	 */
	public function postGanti($id) 
	{
		# validasi
		$v = Validator::make(Input::all(), Kelurahan::$rules);
		# jika validasi tidak valid
		if ($v->fails()) {
			# koleksi variabel error lalu kirim
			$nama = $v->messages()->first('nama') ?: '';
			$id_kecamatan = $v->messages()->first('id_kecamatan') ?: '';
			$status = '';
			return Response::json(compact('nama', 'id_kecamatan', 'status'));
		# jika validasi gagal	
		} else {
			# inputan dari form
			$nama = Input::get('nama');
			$id_kecamatan = Input::get('id_kecamatan');
			# untuk id_kabupaten
			$id_kabupaten = Kecamatan::find($id_kecamatan)->id_kabupaten;
			# Input data dalam database
			Kelurahan::ganti($id, $nama, $id_kecamatan, $id_kabupaten);
		} 
	}

	/**
	 * Lihat data
	 */
	public function getLihat($id) {
		# Sesuaikan id target
		$temp = Kelurahan::find($id);
		# Tampilkan halaman
		return View::make('_modal.lihat.kelurahan', compact('temp'));
	}

	/**
	 * Hapus data
	 */
	public function getHapus($id) {
		# Title Kontrol
		$title = 'Kelurahan/Desa';
		# Onclick button
		$onclick = 'hapusKelurahan('.$id.')';
		# Sesuaikan id target
		$temp = Kelurahan::find($id);
		# Tampilkan halaman
		return View::make('_modal.hapus', compact('title', 'onclick', 'temp'));
	}

	/**
	 * Hapus isi database
	 */
	public function postHapus($id) {
		# hapus isi database
		Kelurahan::hapus($id);
	}

	/**
	 * Simpan ke halaman .XLS
	 */
	public function getExcel() {
		# kumpulkan data dari models
		$org = Organisasi::data();
		$temp = Kelurahan::orderBy('nama', 'DESC')->get();
		# tampilkan halaman
		return View::make('excel.kelurahan', compact('org', 'temp'));
	}

}