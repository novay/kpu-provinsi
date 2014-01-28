<?php

class KabupatenSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		
		$temp = array(
			array('nama' => 'Balikpapan', 'created_at' => new DateTime, 'updated_at' => new DateTime),
			array('nama' => 'Berau', 'created_at' => new DateTime, 'updated_at' => new DateTime),
			array('nama' => 'Bontang', 'created_at' => new DateTime, 'updated_at' => new DateTime),
			array('nama' => 'Bulungan', 'created_at' => new DateTime, 'updated_at' => new DateTime),
			array('nama' => 'Kutai Barat', 'created_at' => new DateTime, 'updated_at' => new DateTime),
			array('nama' => 'Kutai Kartanegara', 'created_at' => new DateTime, 'updated_at' => new DateTime),
			array('nama' => 'Kutai Timur', 'created_at' => new DateTime, 'updated_at' => new DateTime),
			array('nama' => 'Malinau', 'created_at' => new DateTime, 'updated_at' => new DateTime),
			array('nama' => 'Nunukan', 'created_at' => new DateTime, 'updated_at' => new DateTime),
			array('nama' => 'Paser', 'created_at' => new DateTime, 'updated_at' => new DateTime),
			array('nama' => 'Penajam Paser Utara', 'created_at' => new DateTime, 'updated_at' => new DateTime),
			array('nama' => 'Samarinda', 'created_at' => new DateTime, 'updated_at' => new DateTime),
			array('nama' => 'Tana Tidung', 'created_at' => new DateTime, 'updated_at' => new DateTime),
			array('nama' => 'Tarakan', 'created_at' => new DateTime, 'updated_at' => new DateTime),
		);
		
		DB::table('kabupaten')->insert($temp);
	}

}