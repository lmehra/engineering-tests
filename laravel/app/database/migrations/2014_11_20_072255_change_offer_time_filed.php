<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeOfferTimeFiled extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('offers', function($table) {
            $table->dropColumn('timing');
            $table->time("start_time");
            $table->time("end_time");
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('offers', function($table) {
            $table->string('timing',100);
            $table->dropColumn("start_time");
            $table->dropColumn("end_time");
        });
	}

}
