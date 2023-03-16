<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    public function doctores(){
        return $this->hasOne(Doctor::class);
    }

    public function administradores(){
        return $this->hasOne(Administrador::class);
    }

    public function pacientes(){
        return $this->hasOne(Paciente::class);
    }

    public function paises(){
        return $this->belongsTo(Pais::class);
    }

    public function barrios(){
        return $this->belongsTo(Barrio::class);
    }

    public function ciudades(){
        return $this->belongsTo(Ciudad::class);
    }

    
}

