<?php

/**
 *
 * ====================================
 * Aplikasi Persentase Kekuatan Wilayah
 * ====================================
 * @author Novay Mawbowo ('novay@otaku.si')
 * 
 */

class KabupatenTableSeeder extends Seeder {
	public function run()
	{
		$kabupaten = array(
			'nama' => 'Testing kabupaten nama',
		);
		DB::table('kabupaten')->insert($kabupaten);
	}
}
