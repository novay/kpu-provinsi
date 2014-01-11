<?php

class TpsTableSeeder extends Seeder {
	public function run()
	{
		$tps = array(
			'nama' => 'Testing tps nama',
			'id_kelurahan' => 'Testing tps id_kelurahan',
			'id_kecamatan' => 'Testing tps id_kecamatan',
			'id_kabupaten' => 'Testing tps id_kabupaten',
		);
		DB::table('tps')->insert($tps);
	}
}
