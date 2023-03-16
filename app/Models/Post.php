<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function administradores()
    {
        return $this->belongsTo(Administrador::class);
    }

    public function categorias()
    {
        return $this->belongsTo(Categoria::class);
    }
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }

}
