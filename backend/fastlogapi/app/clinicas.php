<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicas extends Model
{
    protected $fillable = ['nombre','cedula','direccion','administrador'];
}
