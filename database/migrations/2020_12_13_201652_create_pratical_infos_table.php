<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;use Illuminate\Support\Facades\Schema;


class CreatePraticalInfosTable extends Migration {

	public function up()
	{
		Schema::create('praticalinfos', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
            $table->smallInteger('priceTicket')->default('255');
            $table->string('date');
			$table->string('place', 256);
			$table->string('email', 256);
			$table->string('website');
            $table->float('stock');
			$table->string('phone',256);
		});
	}

	public function down()
	{
		Schema::drop('praticalinfos');
	}
}
