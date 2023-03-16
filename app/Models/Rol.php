<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;


    public function consultorios(){
        return $this->hasMany(Consultorio::class);
    }

    public function pacientes(){
        return $this->hasMany(Paciente::class);
    }

    public function administradores()
    {
        return $this->belongsToMany(Administrador::class);
    }
}
