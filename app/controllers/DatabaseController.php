<?php

use Rah\Danpu\Dump;
use Rah\Danpu\Export;
use Rah\Danpu\Import;

class DatabaseController extends BaseController {

	/**
	  * @author : Noviyanto Rachmady ['novay@otaku.si']
	  **/

	/**
	 * Pemberian fungsi konstruksi untuk mem-filter aksi
	 */
	public function __construct() {
		# Koleksi filter
		$this->beforeFilter('auth');
		$this->beforeFilter('csrf', ['only' => ['restore']]);
		# konfigurasi database
		$this->dsn  = 'mysql:dbname='.Config::get('database.connections.mysql.database','kpu-provinsi').'; host=127.0.0.1';
		$this->user = Config::get('database.connections.mysql.username', 'root');
		$this->pass = Config::get('database.connections.mysql.password', '');
	}

	/**
	 * Logika backup
	 */
	public function getBackup() {
		# tentukan lokasi dan nama database
		$file = storage_path().'/backups/'.date('dmYHis').'.sql';
		# dump database
		$dump = new Dump;
		$dump->file($file)->dsn($this->dsn)->user($this->user)->pass($this->pass);
		# export dump
		new Export($dump);
		# download file database akhir
		return Response::download($file, date('dmYHis').'.sql');
	}

	/**
	 * Modal restore
	 */
	public function getRestore() {
		# tampilkan modal
		return View::make('_modal.database.restore');
	}

	/**
	 * Restore isi database
	 */
	public function postRestore() {
		# validasi
		$rules = ['sql' => 'required|sql'];
		$validasi = Validator::make(Input::all(), $rules);
		# bila gagal
		if ($validasi->fails()) {
			# koleksi pesan error lalu kirim
			$sql = $validasi->messages()->first('sql') ?: '';
			return Response::json(compact('sql'));
		# bila sukses
		} else {
			# jika file SQL eksis
			if (Input::hasFile('sql')) {
				# nama berdasarkan tanggal
				$sql = date('dmYHis') . '.sql';
				# unggah sql ke dir "app/storage/restores"
				Input::file('sql')->move(storage_path().'/restores/', $sql);
				# tentukan lokasi file
				$file = storage_path(). '/restores/'.$sql;
				# dump database
				$dump = new Dump;
				$dump->file($file)->dsn($this->dsn)->user($this->user)->pass($this->pass);
				# import dump
				new Import($dump);
				# hapus file restore
				unlink($file);
			# bila tidak ada sql
			} else {
				# buat pesan lalu kirim
				$sql = 'SQL gagal diunggah.';
				return Response::json(compact('sql'));
			}
		}
	}

}