<?php

class KecamatansTableSeeder extends Seeder {
	public function run()
	{
		$kecamatans = array(
			'nama' => 'Testing kecamatan nama',
			'id_kabupaten' => 'Testing kecamatan id_kabupaten',
		);
		DB::table('kecamatans')->insert($kecamatans);
	}
}
