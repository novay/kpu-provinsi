<?php

use Illuminate\Database\Migrations\Migration;

class TabelOrganisasi extends Migration {

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
		Schema::create('organisasi', function($table)
		{
			$table->increments('id');
			$table->string('nama', 100);
			$table->string('logo')->nullable();
			$table->text('alamat');
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
		Schema::drop('organisasi');
	}

}