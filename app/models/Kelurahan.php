<?php

/**
 *
 * ====================================
 * Aplikasi Persentase Kekuatan Wilayah
 * ====================================
 * @author Novay Mawbowo ('novay@otaku.si')
 * 
 */

class Kelurahan extends eloquent 
{
	// Amankan table menuju tabel yang lebih spesifik
	protected $table = 'kelurahan';

	// Amankan inputan yang diperbolehkan untuk melakukan aktifitas input
	protected $fillable = ['nama'];
}