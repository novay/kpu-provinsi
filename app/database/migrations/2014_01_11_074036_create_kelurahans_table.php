<?php

use Illuminate\Database\Migrations\Migration;

class CreateKelurahansTable extends Migration {    

	public function up()
    {
		Schema::create('kelurahans', function($table) {
			$table->increments('id');
			$table->string('nama');
			$table->integer('id_kecamatan');
			$table->integer('id_kabupaten');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('kelurahans');

    }

}