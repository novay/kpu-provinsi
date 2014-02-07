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
		return View::make('_modal.pengaturan.organisasi.nama');
		#, compact('judul', 'id', 'type', 'set', 'label', 'onKeyPress', 'onclick')); 
	}

	/**
	 * Modal Nama Organisasi
	 */
	public function postNama() {
		# Validasi
		$input = Input::all();
		$rules = array('nama' => 'required|max:50|nama_baru');
		$v = Validator::make(Input::all(), $rules);
		# Bila tidak valid
		if ($v->fails()) {
			# Koleksi pesan error lalu kirim ke view
			$nama = $v->messages()->first('nama') ?: '';
			return Response::json(compact('nama'));
		}
		# Temukan id User Aktif dan nama tampilan
		$id = Auth::user()->id;
		$nama = ucwords(Input::get('nama'));
		# Ubah isi database
		Organisasi::ubahNama($id, $nama);
	}

	/**
	 * Modal Alamat Organisasi
	 */
	public function getAlamat() { 
		# tampilkan modal
		return View::make('_modal.pengaturan.organisasi.alamat');
	}

	/**
	 * Modal Domisili Kota
	 */
	public function getKota() { 
		# tampilkan modal
		return View::make('_modal.pengaturan.organisasi.kota');
	}

	/**
	 * Modal Domisili Provinsi
	 */
	public function getProvinsi() { 
		# tampilkan modal
		return View::make('_modal.pengaturan.organisasi.provinsi');
	}

	/**
	 * Modal Domisili Negara
	 */
	public function getNegara() { 
		# tampilkan modal
		return View::make('_modal.pengaturan.organisasi.negara');
	}

	/**
	 * Modal Nama Organisasi
	 */
	public function getLogo() {
		# tampilkan modal
		return View::make('_modal.pengaturan.organisasi.logo'); 
	}

}