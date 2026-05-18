<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SerieRealizada extends Model
{
    protected $fillable = ['sesion_id', 'ejercicio_id', 'num_serie', 'repeticiones', 'peso_kg'];

    public function sesion()
    {
        return $this->belongsTo(Sesion::class);
    }

    public function ejercicio()
    {
        return $this->belongsTo(Ejercicio::class);
    }
}
