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
		$this->command->info('======== Tabel Organisasi Di isi! ========');

		$this->call('SatpamSeeder');
		$this->command->info('======== Tabel Satpam Di isi! ========');
	}

}