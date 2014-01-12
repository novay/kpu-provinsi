<?php

use Illuminate\Database\Migrations\Migration;

class TabelTps extends Migration {

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
		Schema::create('tps', function($table) {
			$table->increments('id');
			$table->string('nama');
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
		Schema::drop('tps');
	}

}