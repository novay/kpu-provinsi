<?php

class SatpamSeeder extends Seeder {

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
			'nama_tampilan'	=> 'Admin',
			'username'		=> 'admin',
			'password'		=> Hash::make('admins'),
			'created_at' 	=> new DateTime, 
			'updated_at' 	=> new DateTime
		);

		DB::table('admin')->insert($org);
	}

}