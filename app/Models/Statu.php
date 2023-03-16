<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statu extends Model
{
    use HasFactory;

    public function consultorios()
    {
        return $this->hasMany(Consultorio::class);
    }

    public function pacientes()
    {
        return $this->hasMany(Paciente::class);
    }

    public function doctores()
    {
        return $this->hasMany(Doctor::class);
    }
}
