<?php

class DataPemilih extends Eloquent {

	/**
	  * @author : Noviyanto Rachmady ['novay@otaku.si']
	  **/

	// Ambil tabel dari database
	protected $table = 'pemilih';

	// Field yang boleh di input
	protected $fillable = ['nik', 'nama', 'jenis_kelamin', 'status', 'tempat_lahir', 'tanggal_lahir', 'umur', 'alamat', 'no_telp', 'keterangan', 'id_tps', 'id_kelurahan', 'id_kecamatan', 'id_kabupaten'];

	// Field yang jadi patokan
	protected $guarded = ['id'];

	/**
	 * Tambah data ke database
	 *
	 * @return string
	 */
	public static function tambah($nama)
	{
		DataPemilih::create(compact('nik', 'nama', 'jenis_kelamin', 'status', 'tempat_lahir', 'tanggal_lahir', 'umur', 'alamat', 'no_telp', 'keterangan', 'id_tps', 'id_kelurahan', 'id_kecamatan', 'id_kabupaten'));
	}

	/**
	 * Ganti data dalam database
	 *
	 * @return string
	 */
	public static function ganti($nik, $nama, $jenis_kelamin, $status, $tempat_lahir, $tanggal_lahir, $umur, $alamat, $no_telp, $keterangan, $id_tps, $id_kelurahan, $id_kecamatan, $id_kabupaten)
	{
		$temp = DataPemilih::find($id);
		$temp->nik			= $nik;
		$temp->nama			= $nama;
		$temp->jenis_kelamin= $jenis_kelamin;
		$temp->status		= $status;
		$temp->tempat_lahir	= $tempat_lahir;
		$temp->tanggal_lahir= $tanggal_lahir;
		$temp->umur			= $umur;
		$temp->alamat		= $alamat;
		$temp->no_telp		= $no_telp;
		$temp->keterangan	= $keterangan;
		$temp->id_tps		= $id_tps;
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
		DataPemilih::destroy($id);
	}

}