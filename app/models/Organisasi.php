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
	public static $rules = [
		'nama'=>'required|max:50|nama_baru', 
		'alamat'=>'required|max:255', 
		'logo'=>'required|mimes:png,jpg,bmp|max:5000',
		'kota'=>'required',
		'provinsi'=>'required',
		'negara'=>'required'
		];

	/**
	 * Tambah data ke database
	 */
	public static function data()
	{
		return Organisasi::find(1);
	}

	/**
	 * Ganti logo Organisasi
	 */
	public static function ubahLogo($id, $logo)
	{
		$temp = Organisasi::find($id);
		$temp->logo = $logo;
		$temp->save();
	}

	/**
	 * Ganti nama Organisasi
	 */
	public static function ubahNama($id, $nama)
	{
		$temp = Organisasi::find($id);
		$temp->nama = $nama;
		$temp->save();
	}

	/**
	 * Ganti alamat Organisasi
	 */
	public static function ubahAlamat($id, $alamat)
	{
		$temp = Organisasi::find($id);
		$temp->alamat = $alamat;
		$temp->save();
	}

	/**
	 * Ganti kota Organisasi berada
	 */
	public static function ubahKota($id, $kota)
	{
		$temp = Organisasi::find($id);
		$temp->kota = $kota;
		$temp->save();
	}

	/**
	 * Ganti provinsi Organisasi
	 */
	public static function ubahProvinsi($id, $provinsi)
	{
		$temp = Organisasi::find($id);
		$temp->provinsi = $provinsi;
		$temp->save();
	}

	/**
	 * Ganti negara Organisasi
	 */
	public static function ubahNegara($id, $negara)
	{
		$temp = Organisasi::find($id);
		$temp->negara = $negara;
		$temp->save();
	}

}