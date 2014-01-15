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
		# Ambil isi tabel Tps, urutkan berdasarkan nama
		$daftar = Tps::orderBy('nama', 'DESC')->get();
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
		# jika validasi valid
		if ($v->passes()) {
			# inputan dari form
			$nama = Input::get('nama');
			$id_kelurahan = Input::get('id_kelurahan');
			$id_kecamatan = Input::get('id_kecamatan');
			$id_kabupaten = Input::get('id_kabupaten');
			# Input data dalam database
			Tps::tambah($nama, $id_kelurahan, $id_kecamatan, $id_kabupaten);
		# jika validasi gagal	
		} else {
			# koleksi variabel error
			$nama = $v->messages()->first('nama') ?: '';
			$id_kelurahan = $v->messages()->first('id_kelurahan') ?: '';
			$id_kecamatan = $v->messages()->first('id_kecamatan') ?: '';
			$id_kabupaten = $v->messages()->first('id_kabupaten') ?: '';
			$status = '';
			# Kirim
			return Response::json(compact('nama', 'id_kelurahan', 'id_kecamatan', 'id_kabupaten', 'status'));
		} 
	}

	/**
	 * Halaman ganti
	 */
	public function getGanti($id) {
		# Sesuaikan id target
		$kab = Tps::find($id);
		# Tampilkan halaman
		return View::make('_partials.modal.tps_ganti', compact('kab'));
	}

	/**
	 * Ganti isi database
	 */
	public function postGanti() 
	{
		# validasi
		$v = Validator::make(Input::all(), Tps::$rules);
		# jika validasi valid
		if ($v->passes()) {
			# inputan dari form
			$nama = Input::get('nama');
			$id_kelurahan = Input::get('id_kelurahan');
			$id_kecamatan = Input::get('id_kecamatan');
			$id_kabupaten = Input::get('id_kabupaten');
			# Input data dalam database
			Tps::ganti($nama, $id_kelurahan, $id_kecamatan, $id_kabupaten);
		# jika validasi gagal	
		} else {
			# koleksi variabel error
			$nama = $v->messages()->first('nama') ?: '';
			$id_kelurahan = $v->messages()->first('id_kelurahan') ?: '';
			$id_kecamatan = $v->messages()->first('id_kecamatan') ?: '';
			$id_kabupaten = $v->messages()->first('id_kabupaten') ?: '';
			$status = '';
			# Kirim
			return Response::json(compact('nama', 'id_kelurahan', 'id_kecamatan', 'id_kabupaten', 'status'));
		}  
	}

	/**
	 * Hapus data
	 */
	public function getHapus($id) {
		# Sesuaikan id target
		$kab = Tps::find($id);
		# Tampilkan halaman
		return View::make('_partials.modal.tps_hapus', compact('kab'));
	}

	/**
	 * Hapus isi database
	 */
	public function postHapus($id) {
		# hapus isi database
		Tps::hapus($id);
	}

	/**
	 * Hapus semua data yang dipilih
	 */
	public function getHapusCeklis() {
		# tampilkan halaman
		return View::make('_partials.modal.tps_hapus_daftar');
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
			Tps::hapus($id[$i]['value']);
		}
	}

	/**
	 * Simpan ke halaman .XLS
	 */
	public function getExcel() {
		# kumpulkan data dari models
		$org = Organisasi::data();
		$kab = Tps::orderBy('nama', 'DESC')->get();
		# tampilkan halaman
		return View::make('excel.tps', compact('org', 'kab'));
	}

}