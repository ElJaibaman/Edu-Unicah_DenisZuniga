<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Carrera;
use App\Models\Curso;

class Alumno extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'nombre',
        'direccion',
        'correo',
        'telefono',
        'ncuenta',
        'forma_ingreso',
    ];

    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }

    public function curso()
    {
        return $this->belongsToMany(Curso::class);
    }
}
