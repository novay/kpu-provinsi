<?php

use Illuminate\Database\Migrations\Migration;

class TabelPemilihTetap extends Migration {

	/**
 	  * @author : Noviyanto Rachmady ['novay@otaku.si']
 	  **/
	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pemilih', function($table) {
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

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pemilih');
	}

}