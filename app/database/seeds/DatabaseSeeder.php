<?php

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
		$this->call('KabupatensTableSeeder');
		$this->call('KecamatansTableSeeder');
		$this->call('KelurahansTableSeeder');
		$this->call('TpsTableSeeder');
		$this->call('PemilihsTableSeeder');
	}

}