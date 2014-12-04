<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePortafoliosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('portafolios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('image');
			$table->string('description');
			$table->string('body')->nullable();
			$table->string('url')->nullable();
			$table->string('tech_id')->nullable();
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
		Schema::drop('portafolios');
	}

}
