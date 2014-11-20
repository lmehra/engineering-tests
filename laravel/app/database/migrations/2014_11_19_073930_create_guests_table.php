<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuestsTable extends Migration 
{

	public function up()
	{
		Schema::create('guests', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->bigInteger('phone_number');
		});
	}

	public function down()
	{
		Schema::dropIfExists('guests');
	}

}



