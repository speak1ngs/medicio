<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;


    public function personas(){
        return $this->belongsTo(Persona::class);
    }

    public function status(){
        return $this->belongsTo(Statu::class);
    }

    // muchos a muchos

    public function consultorios()
    {
        return $this->belongsToMany(Consultorio::class);
    }

    public function calificaciones()
    {
        return $this->belongsToMany(Calificacion::class);
    }

    public function especialidades()
    {
        return $this->belongsToMany(Especialidad::class);
    }

}
