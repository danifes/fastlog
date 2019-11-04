<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class remisionesfirmas extends Model
{
    protected $fillable = ['id_remision','firma','nombre','observacion'];
}
