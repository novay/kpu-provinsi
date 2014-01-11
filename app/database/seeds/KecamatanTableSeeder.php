<?php

/**
 *
 * ====================================
 * Aplikasi Persentase Kekuatan Wilayah
 * ====================================
 * @author Novay Mawbowo ('novay@otaku.si')
 * 
 */

class KecamatanTableSeeder extends Seeder {
	public function run()
	{
		$kecamatan = array(
			'nama' 			=> 'Testing kecamatan nama',
			'id_kabupaten' 	=> 'Testing kecamatan id_kabupaten',
		);
		DB::table('kecamatan')->insert($kecamatan);
	}
}
