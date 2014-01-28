<?php

class Kelurahan extends Eloquent {

	/**
	  * @author : Noviyanto Rachmady ['novay@otaku.si']
	  **/

	# Ambil tabel dari database
	protected $table = 'kelurahan';

	# Field yang boleh di input
	protected $fillable = ['nama', 'id_kecamatan', 'id_kabupaten'];

	# Field yang jadi patokan
	protected $guarded = ['id'];

	# Validasi
	public static $rules = ['nama'=>'required|max:50|min:3', 'id_kecamatan'=>'required'];

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
	public static function tambah($nama, $id_kecamatan, $id_kabupaten)
	{
		Kelurahan::create(compact('nama', 'id_kecamatan', 'id_kabupaten'));
	}

	/**
	 * Ganti data dalam database
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
	 */
	public static function hapus($id) 
	{
		Kelurahan::destroy($id);
		Tps::where('id_kelurahan', $id)->delete();
	}

	/**
	 * Menu dropdown
	 */
	public static function dropdown() {
        # Ambil semua nilai model kategori
        $kelurahan = Kelurahan::all();
        # Inisialisasi pilihsn array dengan nilai default
        $pilihan[''] = '';
        # Lakukan perulangan
        foreach($kelurahan as $temp) { 
            # Tampikan semua nama berdasarkan id kategori yang ada
        	$pilihan[$temp->id] = $temp->nama;
        }
        # Kirim nilai
        return $pilihan;
    }

}