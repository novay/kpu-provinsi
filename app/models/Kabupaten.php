<?php

class Kabupaten extends Eloquent {

	/**
	  * @author : Noviyanto Rachmady ['novay@otaku.si']
	  **/

	# Ambil tabel dari database
	protected $table = 'kabupaten';

	# Field yang boleh di input
	protected $fillable = ['nama'];

	# Field yang jadi patokan
	protected $guarded = ['id'];

	# Validasi
	public static $rules = ['nama'=>'required|max:50|min:3|unique:kabupaten,nama'];

	/**
	 * Relasi
	 */
	public function Kecamatan()
    {
        return $this->hasMany('Kecamatan', 'id_kabupaten');
    }

    /**
	 * Relasi
	 */
	public function Kelurahan()
    {
        return $this->hasMany('Kelurahan', 'id_kabupaten');
    }

    /**
	 * Relasi
	 */
	public function Tps()
    {
        return $this->hasMany('Tps', 'id_kabupaten');
    }

	/**
	 * Tambah data ke database
	 */
	public static function tambah($nama)
	{
		Kabupaten::create(compact('nama'));
	}

	/**
	 * Ganti data dalam database
	 */
	public static function ganti($id, $nama) {
		$temp = Kabupaten::find($id);
		$temp->nama	= $nama;
		$temp->save();
	}

	/**
	 * Hapus data dalam database
	 */
	public static function hapus($id) {
		Kabupaten::destroy($id);
	}

	/**
	 * Menu dropdown
	 */
	public static function dropdown() {
        # Ambil semua nilai model kategori
        $kabupaten = Kabupaten::all();
        # Inisialisasi pilihsn array dengan nilai default
        $pilihan[''] = 'Pilih Kabupaten...';
        # Lakukan perulangan
        foreach($kabupaten as $temp) { 
            # Tampikan semua nama berdasarkan id kategori yang ada
        	$pilihan[$temp->id] = $temp->nama;
        }
        # Kirim nilai
        return $pilihan;
    }

}