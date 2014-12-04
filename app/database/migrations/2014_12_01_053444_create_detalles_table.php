<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetallesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('location')->nullable();
			$table->string('cargo')->nullable();
			$table->string('imagen')->nullable();
			$table->string('website')->nullable();
			$table->string('github')->nullable();
			$table->string('facebook')->nullable();
			$table->string('tweeter')->nullable();
			$table->string('about')->nullable();
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
		Schema::drop('detalles');
	}

}
