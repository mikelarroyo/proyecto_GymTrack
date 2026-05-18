<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    protected $fillable = ['nombre', 'grupo_muscular', 'descripcion'];

    public function rutinaEjercicios()
    {
        return $this->hasMany(RutinaEjercicio::class);
    }

    public function seriesRealizadas()
    {
        return $this->hasMany(SerieRealizada::class);
    }
}
