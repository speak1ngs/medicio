<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    public function personas(){
        return $this->hasMany(Persona::class);
    }


    public function ciudades(){
        return $this->hasMany(Ciudad::class);
    }
}
