<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory; 
    public function calendarios_doctores()
    {
        return $this->hasMany(Calendario_Doctor::class);
    }

    public function citas_status()
    {
        return $this->belongsTo(Cita_Statu::class);
    }

    public function pagos_status()
    {
        return $this->belongsTo(Pago_Statu::class);
    }


    public function evaluaciones_doctores_consultorios()
    {
        return $this->belongsToMany(Evaluacion_Doctor_Consultorio::class);
    }

    public function evaluaciones_pacientes()
    {
        return $this->belongsToMany(Evaluacion_Paciente::class);
    }

    public function pacientes()
    {
        return $this->belongsToMany(Paciente::class);
    }
}
