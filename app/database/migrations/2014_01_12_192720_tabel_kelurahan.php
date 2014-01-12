<?php

use Illuminate\Database\Migrations\Migration;

class TabelKelurahan extends Migration {

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
		Schema::create('kelurahan', function($table) {
			$table->increments('id');
			$table->string('nama');
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
		Schema::drop('kelurahan');
	}

}