<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RutinaEjercicio extends Model
{
    protected $fillable = ['rutina_id', 'ejercicio_id', 'orden', 'series_objetivo', 'reps_objetivo'];

    public function rutina()
    {
        return $this->belongsTo(Rutina::class);
    }

    public function ejercicio()
    {
        return $this->belongsTo(Ejercicio::class);
    }
}
