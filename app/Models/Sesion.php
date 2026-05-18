<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    protected $fillable = ['user_id', 'rutina_id', 'fecha', 'notas'];

    protected $casts = [
        'fecha' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rutina()
    {
        return $this->belongsTo(Rutina::class);
    }

    public function seriesRealizadas()
    {
        return $this->hasMany(SerieRealizada::class);
    }
}
