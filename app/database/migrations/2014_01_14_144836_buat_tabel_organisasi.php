<?php

use Illuminate\Database\Migrations\Migration;

class BuatTabelOrganisasi extends Migration {

	/**
	  * @author : Noviyanto Rachmady ['novay@otaku.si']
	  **/
	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('organisasi', function($table) {
			$table->increments('id');
			$table->string('nama', 100);
			$table->string('logo')->nullable();
			$table->string('alamat');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('organisasi');
	}

}