<?php

class KelurahansTableSeeder extends Seeder {
	public function run()
	{
		$kelurahans = array(
			'nama' => 'Testing kelurahan nama',
			'id_kecamatan' => 'Testing kelurahan id_kecamatan',
			'id_kabupaten' => 'Testing kelurahan id_kabupaten',
		);
		DB::table('kelurahans')->insert($kelurahans);
	}
}
