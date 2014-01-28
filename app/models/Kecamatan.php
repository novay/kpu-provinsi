<?php

class Kecamatan extends Eloquent {

	/**
	  * @author : Noviyanto Rachmady ['novay@otaku.si']
	  **/

	# Ambil tabel dari database
	protected $table = 'kecamatan';

	# Field yang boleh di input
	protected $fillable = ['nama', 'id_kabupaten'];

	# Field yang jadi patokan
	protected $guarded = ['id'];

	# Validasi
	public static $rules = ['nama'=>'required|max:50|min:3', 'id_kabupaten'=>'required'];

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
	public function Kelurahan()
    {
        return $this->hasMany('Kelurahan', 'id_kecamatan');
    }

    /**
	 * Relasi
	 */
	public function Tps()
    {
        return $this->hasMany('Tps', 'id_kecamatan');
    }

	/**
	 * Tambah data ke database
	 */
	public static function tambah($nama, $id_kabupaten)
	{
		Kecamatan::create(compact('nama', 'id_kabupaten'));
	}

	/**
	 * Ganti data dalam database
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
	 */
	public static function hapus($id) 
	{
		Kecamatan::destroy($id);
		Kelurahan::where('id_kecamatan', $id)->delete();
		Tps::where('id_kecamatan', $id)->delete();
	}

 	/**
	 * Menu dropdown
	 */
	public static function dropdown() {
        # Ambil semua nilai model kategori
        $kecamatan = Kecamatan::all();
        # Inisialisasi pilihsn array dengan nilai default
        $pilihan[''] = '';
        # Lakukan perulangan
        foreach($kecamatan as $temp) { 
            # Tampikan semua nama berdasarkan id kategori yang ada
        	$pilihan[$temp->id] = $temp->nama;
        }
        # Kirim nilai
        return $pilihan;
    }

}