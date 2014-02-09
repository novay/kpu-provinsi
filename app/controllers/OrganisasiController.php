<?php

class OrganisasiController extends BaseController {

	/**
	  * @author : Noviyanto Rachmady ['novay@otaku.si']
	  **/

	/**
	 * Pemberian fungsi konstruksi untuk mem-filter aksi
	 */
	public function __construct() {
		# Koleksi filter
		$this->beforeFilter('auth');
		$this->beforeFilter('ajax');
		$this->beforeFilter('csrf', array('on' => array('post')));
	}

	/**
	 * Modal Nama Organisasi
	 */
	public function getNama() { 
		## Koleksi Variabel untuk Form
		#$judul		 = 'Ubah Nama Organisasi';
		#$id		 = 'nama';
		#$type		 = 'text';
		#$set		 = Organisasi::data()->nama;
		#$label		 = 'Nama Organisasi';
		#$onKeyPress = 'enterGantiNama(event)';
		#$onclick 	 = 'gantiNama()';
		## Tampilkan halaman beserta variabel
		#return View::make('_modal.pengaturan.organisasi', compact('judul', 'id', 'type', 'set', 'label', 'onKeyPress', 'onclick')); 
		return View::make('_modal.pengaturan.organisasi.nama');
	}

	/**
	 * Ubah Nama Organisasi
	 */
	public function postNama() {
		# Validasi
		$input = Input::all();
		$rules = array('nama' => 'required|min:2');
		$v = Validator::make($input, $rules);
		# jika validasi gagal
		if ($v->fails()) {
			# koleksi variabel error lalu kirim via json
			$nama = $v->messages()->first('nama') ?: '';
			return Response::json(compact('nama'));
		# jika sukses
		} else {
			# tarik id admin aktif
			$id = Organisasi::data()->id;
			# inputan dari form
			$nama = ucwords(Input::get('nama'));
			# Ubah isi database
			Organisasi::gantiNama($id, $nama);
		}
	}

	/**
	 * Modal Alamat Organisasi
	 */
	public function getAlamat() { 
		# tampilkan modal
		return View::make('_modal.pengaturan.organisasi.alamat');
	}

	/**
	 * Ubah Alamat Organisasi
	 */
	public function postAlamat() {
		# Validasi
		$input = Input::all();
		$rules = array('alamat' => 'required|min:5');
		$v = Validator::make($input, $rules);
		# jika validasi gagal
		if ($v->fails()) {
			# koleksi variabel error lalu kirim via json
			$alamat = $v->messages()->first('alamat') ?: '';
			return Response::json(compact('alamat'));
		# jika sukses
		} else {
			# tarik id admin aktif
			$id = Organisasi::data()->id;
			# inputan dari form
			$alamat = ucwords(Input::get('alamat'));
			# Ubah isi database
			Organisasi::gantiAlamat($id, $alamat);
		}
	}

	/**
	 * Modal Domisili Kota
	 */
	public function getKota() { 
		# tampilkan modal
		return View::make('_modal.pengaturan.organisasi.kota');
	}

	/**
	 * Ubah Kota Organisasi
	 */
	public function postKota() {
		# Validasi
		$input = Input::all();
		$rules = array('kota' => 'required|min:2');
		$v = Validator::make($input, $rules);
		# jika validasi gagal
		if ($v->fails()) {
			# koleksi variabel error lalu kirim via json
			$kota = $v->messages()->first('kota') ?: '';
			return Response::json(compact('kota'));
		# jika sukses
		} else {
			# tarik id admin aktif
			$id = Organisasi::data()->id;
			# inputan dari form
			$kota = ucwords(Input::get('kota'));
			# Ubah isi database
			Organisasi::gantiKota($id, $kota);
		}
	}

	/**
	 * Modal Domisili Provinsi
	 */
	public function getProvinsi() { 
		# tampilkan modal
		return View::make('_modal.pengaturan.organisasi.provinsi');
	}

	/**
	 * Ubah Negara Organisasi
	 */
	public function postProvinsi() {
		# Validasi
		$input = Input::all();
		$rules = array('provinsi' => 'required|min:2');
		$v = Validator::make($input, $rules);
		# jika validasi gagal
		if ($v->fails()) {
			# koleksi variabel error lalu kirim via json
			$provinsi = $v->messages()->first('provinsi') ?: '';
			return Response::json(compact('provinsi'));
		# jika sukses
		} else {
			# tarik id admin aktif
			$id = Organisasi::data()->id;
			# inputan dari form
			$provinsi = ucwords(Input::get('provinsi'));
			# Ubah isi database
			Organisasi::gantiProvinsi($id, $provinsi);
		}
	}

	/**
	 * Modal Domisili Negara
	 */
	public function getNegara() { 
		# tampilkan modal
		return View::make('_modal.pengaturan.organisasi.negara');
	}

	/**
	 * Ubah Negara Organisasi
	 */
	public function postNegara() {
		# Validasi
		$input = Input::all();
		$rules = array('negara' => 'required|min:2');
		$v = Validator::make($input, $rules);
		# jika validasi gagal
		if ($v->fails()) {
			# koleksi variabel error lalu kirim via json
			$negara = $v->messages()->first('negara') ?: '';
			return Response::json(compact('negara'));
		# jika sukses
		} else {
			# tarik id admin aktif
			$id = Organisasi::data()->id;
			# inputan dari form
			$negara = ucwords(Input::get('negara'));
			# Ubah isi database
			Organisasi::gantiNegara($id, $negara);
		}
	}

	/**
	 * Modal Nama Organisasi
	 */
	public function getLogo() {
		# tampilkan modal
		return View::make('_modal.pengaturan.organisasi.logo'); 
	}

}