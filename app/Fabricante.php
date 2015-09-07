<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model {

	protected $table = "fabricante";

	protected $fillable = array('color', 'cilindraje', 'peso');

	public function vehiculos(){
		$this->hasMany("Vehiculo");
	}
}