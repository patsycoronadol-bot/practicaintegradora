<?php

namespace App\Models;

use App\Models\Evento;
use Illuminate\Database\Eloquent\Model;

class Asistente extends Model
{
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'evento_id',
    ];

    public function evento()
    {
        return $this->belongsTo(Evento::class);
    }
}