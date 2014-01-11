<?php

use Illuminate\Database\Migrations\Migration;

class CreateKecamatansTable extends Migration {    

	public function up()
    {
		Schema::create('kecamatans', function($table) {
			$table->increments('id');
			$table->string('nama');
			$table->integer('id_kabupaten');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('kecamatans');

    }

}