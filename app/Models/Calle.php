<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calle extends Model
{
    use HasFactory;
    
    public function consultorios(){
        return $this->hasMany(Consultorio::class);
    }
}
