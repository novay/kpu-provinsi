<?php

class TpsController extends BaseController {

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
		# Ambil isi tabel, urutkan berdasarkan nama
		$daftar = Tps::orderBy('created_at', 'DESC')->get();
		# Tampilkan halaman tujuan
		return View::make('master.tps', compact('daftar'));
	}

	/**
	 * Kehalaman tambah
	 */
	public function getBaru() {
		# Tampilkan halaman
		return View::make('_modal.tambah.tps');
	}

	/**
	 * Input ke dalam database
	 */
	public function postBaru() {
		# validasi
		$v = Validator::make(Input::all(), Tps::$rules);
		# jika validasi tidak valid
		if ($v->fails()) {
			# koleksi variabel error lalu kirim
			$nama = $v->messages()->first('nama') ?: '';
			$id_kelurahan = $v->messages()->first('id_kelurahan') ?: '';
			$status = '';
			return Response::json(compact('nama', 'id_kelurahan', 'status'));
		# jika validasi gagal	
		} else {
			# inputan dari form
			$nama = Input::get('nama');
			$id_kelurahan = Input::get('id_kelurahan');
			# untuk id_kecamatan
			$id_kecamatan = Kelurahan::find($id_kelurahan)->id_kecamatan;
			# untuk id_kabupaten
			$id_kabupaten = Kecamatan::find($id_kecamatan)->id_kabupaten;
			# Input data dalam database
			Tps::tambah($nama, $id_kelurahan, $id_kecamatan, $id_kabupaten);
		} 
	}

	/**
	 * Halaman ganti
	 */
	public function getGanti($id) {
		# Sesuaikan id target
		$temp = Tps::find($id);
		# Tampilkan halaman
		return View::make('_modal.ganti.tps', compact('temp'));
	}

	/**
	 * Ganti isi database
	 */
	public function postGanti($id) 
	{
		# validasi
		$v = Validator::make(Input::all(), Tps::$rules);
		# jika validasi tidak valid
		if ($v->fails()) {
			# koleksi variabel error lalu kirim
			$nama = $v->messages()->first('nama') ?: '';
			$id_kelurahan = $v->messages()->first('id_kelurahan') ?: '';
			$status = '';
			return Response::json(compact('nama', 'id_kelurahan', 'status'));
		# jika validasi gagal	
		} else {
			# inputan dari form
			$nama = Input::get('nama');
			$id_kelurahan = Input::get('id_kelurahan');
			# untuk id_kecamatan
			$id_kecamatan = Kelurahan::find($id_kelurahan)->id_kecamatan;
			# untuk id_kabupaten
			$id_kabupaten = Kecamatan::find($id_kecamatan)->id_kabupaten;
			# Input data dalam database
			Tps::ganti($id, $nama, $id_kelurahan, $id_kecamatan, $id_kabupaten);
		} 
	}

	/**
	 * Lihat data
	 */
	public function getLihat($id) {
		# Sesuaikan id target
		$temp = Tps::find($id);
		# Tampilkan halaman
		return View::make('_modal.lihat.tps', compact('temp'));
	}

	/**
	 * Hapus data
	 */
	public function getHapus($id) {
		# Title Kontrol
		$title = 'Titik TPS';
		# Onclick button
		$onclick = 'hapusTps('.$id.')';
		# Sesuaikan id target
		$temp = Tps::find($id);
		# Tampilkan halaman
		return View::make('_modal.hapus', compact('title', 'onclick', 'temp'));
	}

	/**
	 * Hapus isi database
	 */
	public function postHapus($id) {
		# hapus isi database
		Tps::hapus($id);
	}

	/**
	 * Simpan ke halaman .XLS
	 */
	public function getExcel() {
		# kumpulkan data dari models
		$org = Organisasi::data();
		$temp = Tps::orderBy('nama', 'DESC')->get();
		# tampilkan halaman
		return View::make('excel.tps', compact('org', 'temp'));
	}

}