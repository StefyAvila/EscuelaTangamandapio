<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    use HasFactory;
     
    //Un grado puede tener muchos alumnos
    public function alumnos(){
        return $this->hasMany('App\Models\Alumno');
    }
}
