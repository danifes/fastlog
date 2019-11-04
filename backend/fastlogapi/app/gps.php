<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gps extends Model
{
    protected $fillable = ['codigo_barras','proveedor','identificador','celular_proveedor'];
}
