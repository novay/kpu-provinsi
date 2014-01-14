<?php

class OrganisasiSeeder extends Seeder {

	/**
 	  * @author : Noviyanto Rachmady ['novay@otaku.si']
 	  **/

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$org = array(
			'nama'   		=> 'Nama Organisasi',
			'alamat'		=> 'Tuliskan Alamat Organisasi Disini.',
			'created_at' 	=> new DateTime, 
			'updated_at' 	=> new DateTime
		);

		DB::table('organisasi')->insert($org);
	}

}