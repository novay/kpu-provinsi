<?php

use Illuminate\Database\Migrations\Migration;

class CreatePemilihsTable extends Migration {    

	public function up()
    {
		Schema::create('pemilihs', function($table) {
			$table->increments('id');
			$table->integer('nik');
			$table->string('nama');
			$table->integer('jenis_kelamin');
			$table->integer('status');
			$table->string('tempat_lahir');
			$table->date('tanggal_lahir');
			$table->integer('umur');
			$table->text('alamat');
			$table->integer('no_telp');
			$table->text('keterangan');
			$table->integer('id_tps');
			$table->integer('id_kelurahan');
			$table->integer('id_kecamatan');
			$table->integer('id_kabupaten');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('pemilihs');

    }

}