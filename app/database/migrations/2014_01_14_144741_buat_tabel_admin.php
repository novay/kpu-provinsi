<?php

use Illuminate\Database\Migrations\Migration;

class BuatTabelAdmin extends Migration {

	/**
	  * @author : Noviyanto Rachmady ['novay@otaku.si']
	  **/

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('admin', function($table) {
			$table->increments('id');
			$table->string('username', 20);
			$table->string('password', 50);
			$table->string('nama_tampilan', 20);
			$table->string('avatar')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('admin');
	}

}