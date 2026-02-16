<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable = [
        'estudiante_id',
        'descripcion',
        'curso',
    ];

    // Relación: un comentario pertenece a un estudiante
    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class);
    }
}
