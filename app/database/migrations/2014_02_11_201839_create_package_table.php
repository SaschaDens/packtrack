<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePackageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('package', function(Blueprint $table) {
			$table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->string('to_country');
            $table->string('to_city');
            $table->string('to_address');
            $table->string('to_postalcode');
            $table->string('tracking_code');
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
		Schema::drop('package');
	}

}
