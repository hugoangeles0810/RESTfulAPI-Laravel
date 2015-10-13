<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model {

	protected $table = "fabricantes";

	protected $fillable = array('nombre', 'telefono');

	protected $hidden = array('created_at', 'updated_at');

	public function vehiculos(){
		return $this->hasMany("App\Vehiculo");
	}
}