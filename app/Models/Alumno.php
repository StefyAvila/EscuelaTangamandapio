<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alumno extends Model
{
    use HasFactory;

    protected $guarded = [];

    //uno a muchos (inversa)
    public function grado(){
        return $this->belongsTo(Grado::class);
    }
}
