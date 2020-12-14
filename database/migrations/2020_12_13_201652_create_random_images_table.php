<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateRandomImagesTable extends Migration {

	public function up()
	{
		Schema::create('randomimages', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('image', 256);
			$table->string('alt', 256);
		});
	}

	public function down()
	{
		Schema::drop('randomimages');
	}
}
