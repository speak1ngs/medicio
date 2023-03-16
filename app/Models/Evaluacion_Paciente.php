<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion_Paciente extends Model
{
    use HasFactory;

    public function citas()
    {
        return $this->belongsToMany(Cita::class);
    }
}
