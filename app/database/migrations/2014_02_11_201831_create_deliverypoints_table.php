<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDeliverypointsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('deliverypoints', function(Blueprint $table) {
			$table->increments('id');
            $table->string('name');
            $table->string('country');
            $table->string('city');
            $table->string('postalcode');
            $table->string('address');
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
		Schema::drop('deliverypoints');
	}

}
