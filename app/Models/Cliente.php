<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    public function arriendo(){
    	return $this->hasMany(Arriendo::class);
    }
    public function clienteSucursal(){
    	return $this->hasMany(ClienteSucursal::class);
    }
    public function clienteVehiculo(){
    	return $this->hasMany(ClienteVehiculo::class);
    }
}
