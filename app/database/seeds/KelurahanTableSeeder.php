<?php

/**
 *
 * ====================================
 * Aplikasi Persentase Kekuatan Wilayah
 * ====================================
 * @author Novay Mawbowo ('novay@otaku.si')
 * 
 */

class KelurahansTableSeeder extends Seeder {
	public function run()
	{
		$kelurahan = array(
			'nama' 			=> 'Testing kelurahan nama',
			'id_kecamatan'  => 'Testing kelurahan id_kecamatan',
			'id_kabupaten'  => 'Testing kelurahan id_kabupaten',
		);
		DB::table('kelurahan')->insert($kelurahan);
	}
}
