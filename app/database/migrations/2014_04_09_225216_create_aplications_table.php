<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAplicationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('membership_applications', function($table)
		{
		    $table->increments('id');
            $table->string('first_name',60);
            $table->string('last_name',60);
            $table->string('phone_number',20);
            $table->string('email',100);
            $table->boolean('approved')->default(0);
            $table->boolean('paid')->default(0);
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
		Schema::dropIfExists('membership_applications');
	}

}
