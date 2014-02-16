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

            $table->integer('user_id')->unsigned();
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->string('postal_code');
            $table->string('tracking_code')->unique();
            $table->string('reciever_mail')->nullable();
            $table->string('description')->nullable();

            // Code indicates the current state of package. 0 = Not in distrubution yet. 1 = trackable, 2 = delivered;
            $table->integer('status_code')->default(0);

			$table->timestamps();

            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
