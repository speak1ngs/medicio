<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    use HasFactory;

    public function calendarios_doctores()
    {
        return $this->belongsToMany(Calendario_Doctor::class);
    }
}
