<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendario_Doctor extends Model
{
    use HasFactory;


    public function citas()
    {
        return $this->belongsTo(Cita::class);
    }

    public function consultorios()
    {
        return $this->belongsToMany(Consultorio::class);
    }


    public function dias()
    {
        return $this->belongsToMany(Dia::class);
    }
}
