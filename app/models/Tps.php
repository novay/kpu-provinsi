<?php

class Tps extends Eloquent {

	/**
	  * @author : Noviyanto Rachmady ['novay@otaku.si']
	  **/

	// Ambil tabel dari database
	protected $table = 'tps';

	// Field yang boleh di input
	protected $fillable = ['nama', 'id_kelurahan', 'id_kecamatan', 'id_kabupaten'];

	// Field yang jadi patokan
	protected $guarded = ['id'];

	/**
	 * Tambah data ke database
	 *
	 * @return string
	 */
	public static function tambah($nama)
	{
		Tps::create(compact('nama', 'id_kelurahan', 'id_kecamatan', 'id_kabupaten'));
	}

	/**
	 * Ganti data dalam database
	 *
	 * @return string
	 */
	public static function ganti($id, $nama, $id_kelurahan, $id_kecamatan, $id_kabupaten)
	{
		$temp = Tps::find($id);
		$temp->nama			= $nama;
		$temp->id_kelurahan	= $id_kelurahan;
		$temp->id_kecamatan	= $id_kecamatan;
		$temp->id_kabupaten	= $id_kabupaten;
		$temp->save();
	}

	/**
	 * Hapus data dalam database
	 *
	 * @return string
	 */
	public static function hapus($id) 
	{
		Tps::destroy($id);
	}

}