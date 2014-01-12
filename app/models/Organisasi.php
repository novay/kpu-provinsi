<?php

class Organisasi extends Eloquent {

	/**
	  * @author : Noviyanto Rachmady ['novay@otaku.si']
	  **/

	// Ambil tabel dari database
	protected $table = 'organisasi';

	// Field yang boleh di input
	protected $fillable = ['nama', 'alamat'];

	// Field yang jadi patokan
	protected $guarded = ['id'];

	/**
	 * Tambah data ke database
	 *
	 * @return string
	 */
	public static function data()
	{
		return Organisasi::find(1);
	}

	/**
	 * Ganti data dalam database
	 *
	 * @return string
	 */
	public static function ganti($nama, $alamat, $logo)
	{
		$temp = Organisasi::data();
		$temp->nama	  = $nama;
		$temp->alamat = $alamat;
		$temp->logo	  = $logo;
		$temp->save();
	}

}