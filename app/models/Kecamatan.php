<?php

class Kecamatan extends Eloquent {

	/**
	  * @author : Noviyanto Rachmady ['novay@otaku.si']
	  **/

	// Ambil tabel dari database
	protected $table = 'kecamatan';

	// Field yang boleh di input
	protected $fillable = ['nama', 'id_kabupaten'];

	// Field yang jadi patokan
	protected $guarded = ['id'];

	/**
	 * Tambah data ke database
	 *
	 * @return string
	 */
	public static function tambah($nama, $id_kabupaten)
	{
		Kecamatan::create(compact('nama', 'id_kabupaten'));
	}

	/**
	 * Ganti data dalam database
	 *
	 * @return string
	 */
	public static function ganti($id, $nama, $id_kabupaten)
	{
		$temp = Kecamatan::find($id);
		$temp->nama			= $nama;
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
		Kecamatan::destroy($id);
	}

}