<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteSucursal extends Model
{
    use HasFactory;
    public function cliente(){
        return
        $this->belongsTo('App\Models\Cliente');
    }
    public function sucursal(){
        return
        $this->belongsTo('App\Models\Sucursal');
    }
}
