<?php

use Illuminate\Database\Migrations\Migration;

class CreateTpsTable extends Migration {    

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

	public function down()
    {
		Schema::drop('tps');

    }

}