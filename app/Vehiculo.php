<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model{

	protected $table = "vehiculo";

	protected $primaryKey = 'serie';

	protected $fillable = array('nombre', 'telefono');

	public function fabricante(){
		$this->belongsTo('Fabricante');
	}
}