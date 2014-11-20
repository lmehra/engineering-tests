<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('restaurant', function($table)
        {
            $table->increments('id');
            $table->string('name',50);
            $table->string('address',50);
            $table->string('city',50);
            $table->string('state',50);
            $table->string('country',50);
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('restaurant');
	}

}
