<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesore extends Model
{
    use HasFactory;

    protected $guarded = [];

    //Uno a muchos
    public function clases(){
        return $this->hasMany('App\Models\Clase');
    }
}
