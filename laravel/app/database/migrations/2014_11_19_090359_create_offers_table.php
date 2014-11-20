<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOffersTable extends Migration 
{

	public function up()
	{
		Schema::create('offers', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('restaurant_id');
			$table->string('description');
			$table->float('price');
			$table->integer('min_guest');
			$table->integer('max_guest');
			$table->string('days_avail');
			$table->string('timing',100);
			$table->boolean('active');
			$table->dateTime('expire_on');
		});
	}

	public function down()
	{
		Schema::dropIfExists('offers');
	}

}
