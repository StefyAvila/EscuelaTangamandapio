<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    protected $guarded = [];
    use HasFactory;
     
    //Un grado puede tener muchos alumnos
    public function alumnos(){
        return $this->hasMany(Alumno::class);
    }

    public function profesor(){
        return $this->hasMany(profesor::class);
    }

    
}
