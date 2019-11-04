<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comercialcasas extends Model
{
    protected $fillable = ['nombre','cedula','direccion','administrador','asesor'];
}
