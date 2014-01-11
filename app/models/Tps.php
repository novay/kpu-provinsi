<?php

/**
 *
 * ====================================
 * Aplikasi Persentase Kekuatan Wilayah
 * ====================================
 * @author Novay Mawbowo ('novay@otaku.si')
 * 
 */

class Tps extends eloquent 
{
	// Amankan table menuju tabel yang lebih spesifik
	protected $table = 'tps';

	// Amankan inputan yang diperbolehkan untuk melakukan aktifitas input
	protected $fillable = ['nama'];
}