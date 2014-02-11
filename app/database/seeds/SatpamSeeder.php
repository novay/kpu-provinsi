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
			'avatar'		=> 'user.jpg',
			'password'		=> Hash::make('admins'),
			'created_at' 	=> new DateTime, 
			'updated_at' 	=> new DateTime
		);
		
		$org2 = array(
			'nama_tampilan'	=> 'Novay',
			'username'		=> 'novay',
			'avatar'		=> 'user.jpg',
			'password'		=> Hash::make('administrator'),
			'created_at' 	=> new DateTime, 
			'updated_at' 	=> new DateTime
		);
		
		$org2 = array(
			'nama_tampilan'	=> 'Demo',
			'username'		=> 'demo',
			'avatar'		=> 'user.jpg',
			'password'		=> Hash::make('admins'),
			'created_at' 	=> new DateTime, 
			'updated_at' 	=> new DateTime
		);

		DB::table('admin')->insert($org);
	}

}