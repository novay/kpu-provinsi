<?php

class Kabupaten extends Eloquent {

	/**
	  * @author : Noviyanto Rachmady ['novay@otaku.si']
	  **/

	// Ambil tabel dari database
	protected $table = 'kabupaten';

	// Field yang boleh di input
	protected $fillable = ['nama'];

	// Field yang jadi patokan
	protected $guarded = ['id'];

	/**
	 * Tambah data ke database
	 *
	 * @return string
	 */
	public static function tambah($nama)
	{
		Kabupaten::create(compact('nama'));
	}

	/**
	 * Ganti data dalam database
	 *
	 * @return string
	 */
	public static function ganti($id, $nama)
	{
		$temp = Kabupaten::find($id);
		$temp->nama	= $nama;
		$temp->save();
	}

	/**
	 * Hapus data dalam database
	 *
	 * @return string
	 */
	public static function hapus($id) 
	{
		Kabupaten::destroy($id);
	}

}