<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vehiculos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehiculo', function(Blueprint $table)
		{
			$table->increments('serie');
			$table->string('color');
			$table->float('cilindraje');
			$table->integer('potencia');
			$table->float('peso');
			$table->integer('fabricante_id')->unsigned();
			$table->foreign('fabricante_id')->references('id')->on('fabricante');
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
		Schema::drop('vehiculos');
	}

}
