<?php

use Illuminate\Database\Migrations\Migration;

/**
 *
 * ====================================
 * Aplikasi Persentase Kekuatan Wilayah
 * ====================================
 * @author Novay Mawbowo ('novay@otaku.si')
 * 
 */

class CreateKelurahansTable extends Migration {    

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

	public function down()
    {
		Schema::drop('kelurahan');

    }

}