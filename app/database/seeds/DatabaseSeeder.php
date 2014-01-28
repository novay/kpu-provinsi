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
		$this->command->info('####### Tabel organisasi berhasil terisi! #######');
		$this->call('SatpamSeeder');
		$this->command->info('####### Tabel admin berhasil terisi! #######');
		$this->call('KabupatenSeeder');
		$this->command->info('####### Tabel kabupaten berhasil terisi! #######');
		$this->call('KecamatanSeeder');
		$this->command->info('####### Tabel kecamatan berhasil terisi! #######');
		$this->call('KelurahanSeeder');
		$this->command->info('####### Tabel kelurahan berhasil terisi! #######');
	}

}