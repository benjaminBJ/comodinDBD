<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    public function arriendo(){
    	return $this->hasMany(Arriendo::class);
    }
    public function sucursal(){
        return
        $this->belongsTo('App\Models\Sucursal');
    }
    public function clienteVehiculo(){
    	return $this->hasMany(ClienteVehiculo::class);
    }
}
