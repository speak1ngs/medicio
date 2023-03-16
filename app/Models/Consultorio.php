<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultorio extends Model
{
    use HasFactory;


    public function paises(){
        return $this->belongsTo(Pais::class);
    }

    public function barrios(){
        return $this->belongsTo(Barrio::class);
    }

    public function ciudades(){
        return $this->belongsTo(Ciudad::class);
    }

    public function calles(){
        return $this->belongsTo(Calle::class);
    }

    public function status(){
        return $this->belongsTo(Statu::class);
    }


    public function roles(){
        return $this->belongsTo(Rol::class);
    }

    // muchos a muchos
    public function doctores()
    {
        return $this->belongsToMany(Doctor::class);
    }


    public function calendarios_doctores()
    {
        return $this->belongsToMany(Calendario_Doctor::class);
    }

    public function calificaciones()
    {
        return $this->belongsToMany(Calificacion::class);
    }


}
