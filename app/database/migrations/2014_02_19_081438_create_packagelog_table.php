<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePackagelogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('packagelog', function(Blueprint $table) {
			$table->increments('id');

            $table->integer('package_id')->unsigned();
            $table->integer('status')->unsigned();
            $table->string('description');
            $table->integer('location_id')->default(1)->unsigned();
			
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
		Schema::drop('packagelog');
	}

}
