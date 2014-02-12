<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourrierlocationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courrierlocation', function(Blueprint $table) {
			$table->increments('id');
            $table->integer('support_id')->unsigned();
            $table->float('longitude');
            $table->float('latitude');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('courrierlocation');
	}

}
