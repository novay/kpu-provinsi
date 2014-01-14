<?php

class DatabaseSeeder extends Seeder {

	/**
	  * @author : Noviyanto Rachmady ['novay@otaku.si']
	  **/
	
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('OrganisasiSeeder');
		$this->command->info('########## Tabel organisasi berhasil terisi! ##########');
		$this->call('SatpamSeeder');
		$this->command->info('########## Tabel admin berhasil terisi! ##########');
	}

}