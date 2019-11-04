<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class historiallogins extends Model
{
    protected $fillable = ['id_usuario', 'ip', 'token'];
}
