<?php

use Illuminate\Database\Migrations\Migration;

class BuatTabelKelurahan extends Migration {

	/**
	  * @author : Noviyanto Rachmady ['novay@otaku.si']
	  **/

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('kelurahan', function($table) {
			$table->increments('id');
			$table->string('nama');
			$table->unsignedInteger('id_kecamatan');
            $table->foreign('id_kecamatan')
                ->references('id')->on('kecamatan')
                ->onDelete('cascade');
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
		Schema::drop('kelurahan');
	}

}