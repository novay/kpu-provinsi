<?php

class Kelurahan extends Eloquent {

	/**
	  * @author : Noviyanto Rachmady ['novay@otaku.si']
	  **/

	// Ambil tabel dari database
	protected $table = 'kelurahan';

	// Field yang boleh di input
	protected $fillable = ['nama', 'id_kecamatan', 'id_kabupaten'];

	// Field yang jadi patokan
	protected $guarded = ['id'];

	/**
	 * Tambah data ke database
	 *
	 * @return string
	 */
	public static function tambah($nama)
	{
		Kelurahan::create(compact('nama', 'id_kecamatan', 'id_kabupaten'));
	}

	/**
	 * Ganti data dalam database
	 *
	 * @return string
	 */
	public static function ganti($id, $nama, $id_kecamatan, $id_kabupaten)
	{
		$temp = Kelurahan::find($id);
		$temp->nama			= $nama;
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
		Kelurahan::destroy($id);
	}

}