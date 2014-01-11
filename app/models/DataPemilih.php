<?php

/**
 *
 * ====================================
 * Aplikasi Persentase Kekuatan Wilayah
 * ====================================
 * @author Novay Mawbowo ('novay@otaku.si')
 * 
 */

class DataPemilih extends eloquent 
{
	// Amankan table menuju tabel yang lebih spesifik
	protected $table = 'pemilih';

	// Amankan inputan yang diperbolehkan untuk melakukan aktifitas input
	protected $fillable = ['nik','nama','jenis_kelamin','status','tempat_lahir','tanggal_lahir','umur','alamat','no_telp','keterangan'];
}