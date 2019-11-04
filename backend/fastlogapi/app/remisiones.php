<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class remisiones extends Model
{
    protected $fillable = ['id_clinica','id_casa_comercial','id_estado','id_usuario','id_gps'];
}
