<?php

class KpuValidator extends Illuminate\Validation\Validator {

	/**
	 * Validasi nama_baru
	 */
	public function validateNamaBaru($atr, $val, $par) {
		# Nilai diterima bila nilai inputan tidak sama dengan nilai nama_tampilan
		return strtolower($val) != strtolower(Auth::user()->nama_tampilan);
	}

	/**
	 * Validasi username_sekarang
	 */
	public function validateUsernameSekarang($atr, $val, $par) {
		# Nilai diterima bila nilai inputan sama dengan nilai username
		return $val == Auth::user()->username;
	}

	/**
	 * Validasi password_sekarang
	 */
	public function validatePasswordSekarang($atr, $val, $par) {
		# nilai diterima bila nilai inputan sama dengan nilai password
		return Hash::check($val, Auth::user()->password);
	}

	/**
	 * Validasi file sql
	 */
	public function validateSql($atr, $val, $par) {
		# Nilai diterima bila nilai inputan sama dengan sql
		return pathinfo(Input::file('sql')->getClientOriginalName(), PATHINFO_EXTENSION) == 'sql';
	}

}