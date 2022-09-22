<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato13 extends Model
{
    use HasFactory;

    protected $fillable = [
        'APELLIDO',
        'NOMBRE',
        'CEDULA',
        'CARGO',
        'SALARIO_MENSUAL',
        'INICIO_DE_LABORES',
        'OBJETIVO_DE_GASTO',
        'ESTATUS',
    ];

}
