<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    public function personas(){
        return $this->belongsTo(Persona::class);
    }

    public function roles()
    {
        return $this->belongsTo(Rol::class);
    }

    public function status()
    {
        return $this->belongsTo(Statu::class);
    }

    public function citas()
    {
        return $this->belongsToMany(Cita::class);
    }

    public function calificaciones()
    {
        return $this->belongsToMany(Calificacion::class);
    }
}
