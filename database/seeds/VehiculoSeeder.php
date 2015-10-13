<?php

use Illuminate\Database\Seeder;
use App\Vehiculo;
use App\Fabricante;
use Faker\Factory as Faker;

class VehiculoSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$faker = Faker::create();

		$cantidad = Fabricante::all()->count();

		for ($i=0; $i < $cantidad ; $i++) { 
			Vehiculo::create([
				'color' => $faker->safeColorName(),
				'cilindraje' => $faker->randomFloat(3, 0, 250.0),
				'potencia' => $faker->randomNumber(3),
				'peso' => $faker->randomFloat(2, 1000.0, 4000.0),
				'fabricante_id' => $faker->numberBetween(1, $cantidad)
			]);
		}
	}

}
