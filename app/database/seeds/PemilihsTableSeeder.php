<?php

class PemilihsTableSeeder extends Seeder {
	public function run()
	{
		$pemilihs = array(
			'nik' => 'Testing pemilih nik',
			'nama' => 'Testing pemilih nama',
			'jenis_kelamin' => 'Testing pemilih jenis_kelamin',
			'status' => 'Testing pemilih status',
			'tempat_lahir' => 'Testing pemilih tempat_lahir',
			'tanggal_lahir' => 'Testing pemilih tanggal_lahir',
			'umur' => 'Testing pemilih umur',
			'alamat' => 'Testing pemilih alamat',
			'no_telp' => 'Testing pemilih no_telp',
			'keterangan' => 'Testing pemilih keterangan',
			'id_tps' => 'Testing pemilih id_tps',
			'id_kelurahan' => 'Testing pemilih id_kelurahan',
			'id_kecamatan' => 'Testing pemilih id_kecamatan',
			'id_kabupaten' => 'Testing pemilih id_kabupaten',
		);
		DB::table('pemilihs')->insert($pemilihs);
	}
}
