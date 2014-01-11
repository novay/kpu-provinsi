<?php

/**
 *
 * ====================================
 * Aplikasi Persentase Kekuatan Wilayah
 * ====================================
 * @author Novay Mawbowo ('novay@otaku.si')
 * 
 */

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('KabupatenTableSeeder');
		$this->call('KecamatanTableSeeder');
		$this->call('KelurahanTableSeeder');
		$this->call('TpsTableSeeder');
		$this->call('PemilihTableSeeder');
	}

}