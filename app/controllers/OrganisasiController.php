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
		$this->beforeFilter('ajax', array('except' => array('excel')));
		$this->beforeFilter('csrf', array('only' => 'postGanti'));
	}

	/**
	 * Halaman Ganti profil organisasi
	 */
	public function getGanti() {
		# tentukan database
		$org = Organisasi::data();
		# tampilkan halaman
		return View::make('_partials.modal.organisasi', compact('org'));
	}

	/**
	 * Simpan profil organisasi baru dalam database
	 */
	public function postGanti()
	{
		# validasi
		$v = Validator::make(Input::all(), Organisasi::$rules);

		# jika validasi berhasil
		if ($v->passes()) {
			# jika inputan punya logo
			if (Input::hasFile('logo')) {
				# tentukan id yang bersangkutan
				$org = Organisasi::data();
				# jika organisasi punya logo maka hapus logo lama
				if ($org->logo) unlink(public_path() . 'assets/img/' . $org->logo);
				# beri nama logo berdasarkan tanggal
				$logo = date('dmYHis') . '.png';
				# sekarang unggah logo ke direktori yg dimaksud
				Input::file('logo')->move('foto/org', $logo);
			# sedang, jika tidak ada logo
			} else {
				# kosongkan
				$logo = null;
			}
			# koleksi inputan dari form
			$nama   = Input::get('nama');
			$alamat = Input::get('alamat');
			# lakukan perubahan database
			Sekolah::ganti($nama, $alamat, $logo);
		# sekarng bila validasi gagal	
		} else {
			# koleksi pesan error untuk di kirim ke form
			$logo = $v->messages()->first('logo') ?: '';
			$nama = $v->messages()->first('nama') ?: '';
			$alamat = $v->messages()->first('alamat') ?: '';
			$status = '';

			return Response::json(compact('logo', 'nama', 'alamat', 'status'));
		}
	}

}