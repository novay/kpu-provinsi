<?php

class Organisasi extends Eloquent {

	/**
	  * @author : Noviyanto Rachmady ['novay@otaku.si']
	  **/

	# Ambil tabel dari database
	protected $table = 'organisasi';

	# Field yang boleh di input
	protected $fillable = ['nama', 'alamat'];

	# Field yang jadi patokan
	protected $guarded = ['id'];

	# Validasi
	public static $rules = ['nama'=>'required|max:50', 'alamat'=>'required|max:255', 'logo'=>'required|mimes:png,jpg,bmp|max:5000'];

	/**
	 * Tambah data ke database
	 */
	public static function data()
	{
		return Organisasi::find(1);
	}

	/**
	 * Ganti data dalam database
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