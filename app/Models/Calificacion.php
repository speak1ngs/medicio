<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    use HasFactory;

    public function consultorios()
    {
        return $this->belongsToMany(Consultorio::class);
    }

    public function pacientes()
    {
        return $this->belongsToMany(Paciente::class);
    }

    public function doctores()
    {
        return $this->belongsToMany(Doctor::class);
    }
}
