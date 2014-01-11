<?php

class KabupatensTableSeeder extends Seeder {
	public function run()
	{
		$kabupatens = array(
			'nama' => 'Testing kabupaten nama',
		);
		DB::table('kabupatens')->insert($kabupatens);
	}
}
