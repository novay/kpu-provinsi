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

class CreateKabupatensTable extends Migration {    

	public function up()
    {
		Schema::create('kabupaten', function($table) {
			$table->increments('id');
			$table->string('nama');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('kabupaten');

    }

}