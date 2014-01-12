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
	public function run()
	{
		$organisasi = [
			
			'nama'   	=> 'PDIP Kalimantan Timur', 
			'logo'   	=> 'logo.png',
			'alamat'	=> 'Jalan Milono No.112 RT.12 Tanjung Redeb - Berau',
			'created_at' 	=> new DateTime, 
			'updated_at' 	=> new DateTime

		];

		DB::table('organisasi')->insert($organisasi);
	}

}