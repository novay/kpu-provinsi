<?php

use Illuminate\Database\Migrations\Migration;

class TabelSatpam extends Migration {

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
		Schema::create('satpam', function($table)
		{
			$table->increments('id');
			$table->string('username');
			$table->string('password');
			$table->string('nama_tampilan');
			$table->string('avatar');
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
		Schema::drop('satpam');
	}

}