<?php

use Illuminate\Database\Migrations\Migration;

class TabelKabupaten extends Migration {

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
		Schema::create('kabupaten', function($table) 
		{
			$table->increments('id');
			$table->string('nama');
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
		Schema::drop('kabupaten');
	}

}