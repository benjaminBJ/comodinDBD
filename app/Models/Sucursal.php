<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    use HasFactory;
    public function clienteSucursal(){
    	return $this->hasMany(ClienteSucursal::class);
    }
    public function vehiculo(){
    	return $this->hasMany(Vehiculo::class);
    }
}
