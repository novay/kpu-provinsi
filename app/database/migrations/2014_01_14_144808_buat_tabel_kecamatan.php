<?php

use Illuminate\Database\Migrations\Migration;

class BuatTabelKecamatan extends Migration {

	/**
	  * @author : Noviyanto Rachmady ['novay@otaku.si']
	  **/

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('kecamatan', function($table) {
			$table->increments('id');
			$table->string('nama');
			$table->unsignedInteger('id_kabupaten');
            $table->foreign('id_kabupaten')
                ->references('id')->on('kabupaten')
                ->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('kecamatan');
	}

}