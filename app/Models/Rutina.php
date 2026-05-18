<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rutina extends Model
{
    protected $fillable = ['user_id', 'nombre', 'descripcion'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ejercicios()
    {
        return $this->hasMany(RutinaEjercicio::class);
    }

    public function sesiones()
    {
        return $this->hasMany(Sesion::class);
    }
}
