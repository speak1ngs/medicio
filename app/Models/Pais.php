<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;


    public function personas(){
        return $this->hasMany(Persona::class);
    }


    public function consultorios(){
        return $this->hasMany(Consultorio::class);
    }

}
