<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['identificacion', 'nombres', 'apellidos', 'fecNac', 'nivel', 'seccion'];
}
