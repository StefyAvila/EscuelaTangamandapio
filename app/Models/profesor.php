<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profesor extends Model
{
    protected $guarded = [];
    use HasFactory;
    public function grados(){
        return $this->belongsTo(Grado::class);
    }
}
 



