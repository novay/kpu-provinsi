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
	public function run()
	{
		$satpam = [	
			[
				'username'   	=> 'novay', 
				'password'   	=> Hash::make('pedobear'),
				'nama_tampilan'	=> 'Administrator',
				'avatar'		=> 'admin.png',
				'created_at' 	=> new DateTime, 
				'updated_at' 	=> new DateTime
			],
			[
				'username'   	=> 'tamu', 
				'password'   	=> Hash::make('pedobear'),
				'nama_tampilan'	=> 'Tamu Terhormat',
				'avatar'		=> 'user.png',
				'created_at' 	=> new DateTime, 
				'updated_at' 	=> new DateTime
			],
		];

		DB::table('satpam')->insert($satpam);
	}

}