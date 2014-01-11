<?php

use Illuminate\Database\Migrations\Migration;

class CreateKabupatensTable extends Migration {    

	public function up()
    {
		Schema::create('kabupatens', function($table) {
			$table->increments('id');
			$table->string('nama');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('kabupatens');

    }

}