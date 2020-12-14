<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateRestaurantTable extends Migration {

	public function up()
	{
		Schema::create('restaurant', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('dish_section', 256);
			$table->string('title_dish', 256);
			$table->string('description_dish', 256)->nullable();
			$table->float('price_dish')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('restaurant');
	}
}
