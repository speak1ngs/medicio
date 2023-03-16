<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago_Statu extends Model
{
    use HasFactory;

    public function cita()
    {
        return $this->hasMany(Cita::class);
    }
}
