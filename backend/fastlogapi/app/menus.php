<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menus extends Model
{
    protected $fillable = ['nombre','url','id_rol'];
}
