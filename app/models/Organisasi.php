<?php

class Organisasi extends Eloquent {

	/**
	  * @author : Noviyanto Rachmady ['novay@otaku.si']
	  **/

	# Ambil tabel dari database
	protected $table = 'organisasi';

	# Field yang boleh di input
	protected $fillable = ['nama', 'alamat', 'kota', 'provinsi', 'negara', 'logo'];

	# Field yang jadi patokan
	protected $guarded = ['id'];

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
	public static function gantiLogo($id, $logo)
	{
		$temp = Organisasi::find($id);
		$temp->logo = $logo;
		$temp->save();
	}

	/**
	 * Ganti nama Organisasi
	 */
	public static function gantiNama($id, $nama)
	{
		$temp = Organisasi::find($id);
		$temp->nama = $nama;
		$temp->save();
	}

	/**
	 * Ganti alamat Organisasi
	 */
	public static function gantiAlamat($id, $alamat)
	{
		$temp = Organisasi::find($id);
		$temp->alamat = $alamat;
		$temp->save();
	}

	/**
	 * Ganti kota Organisasi berada
	 */
	public static function gantiKota($id, $kota)
	{
		$temp = Organisasi::find($id);
		$temp->kota = $kota;
		$temp->save();
	}

	/**
	 * Ganti provinsi Organisasi
	 */
	public static function gantiProvinsi($id, $provinsi)
	{
		$temp = Organisasi::find($id);
		$temp->provinsi = $provinsi;
		$temp->save();
	}

	/**
	 * Ganti negara Organisasi
	 */
	public static function gantiNegara($id, $negara)
	{
		$temp = Organisasi::find($id);
		$temp->negara = $negara;
		$temp->save();
	}

}