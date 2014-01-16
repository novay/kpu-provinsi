<?php

class Kelurahan extends Eloquent {

	/**
	  * @author : Noviyanto Rachmady ['novay@otaku.si']
	  **/

	# Ambil tabel dari database
	protected $table = 'kelurahan';

	# Field yang boleh di input
	protected $fillable = ['nama', 'id_kecamatan'];

	# Field yang jadi patokan
	protected $guarded = ['id'];

	# Validasi
	public static $rules = ['nama'=>'required', 'id_kecamatan'=>'required'];

	/**
	 * Relasi
	 */
	public function Kabupaten()
	{
		return $this->belongsTo('Kabupaten', 'id_kabupaten');
	}

	/**
	 * Relasi
	 */
	public function Kecamatan()
    {
        return $this->belongsTo('Kecamatan', 'id_kecamatan');
    }

    /**
	 * Relasi
	 */
	public function Tps()
    {
        return $this->hasMany('Tps', 'id_kelurahan');
    }

	/**
	 * Tambah data ke database
	 */
	public static function tambah($nama, $id_kecamatan)
	{
		Kelurahan::create(compact('nama', 'id_kecamatan'));
	}

	/**
	 * Ganti data dalam database
	 */
	public static function ganti($id, $nama, $id_kecamatan)
	{
		$temp = Kelurahan::find($id);
		$temp->nama			= $nama;
		$temp->id_kecamatan	= $id_kecamatan;
		$temp->save();
	}

	/**
	 * Hapus data dalam database
	 */
	public static function hapus($id) 
	{
		Kelurahan::destroy($id);
	}

}