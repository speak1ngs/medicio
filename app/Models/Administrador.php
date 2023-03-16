<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;


    public function personas(){
        return $this->belongsTo(Persona::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }


    public function roles()
    {
        return $this->belongsToMany(Rol::class);
    }
}
