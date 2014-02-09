<?php

class PengaturanController extends BaseController {

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
	 * Halaman index
	 */
	public function getIndex() {
		# Tampilkan halaman tujuan
		return View::make('master.pengaturan');
	}

}