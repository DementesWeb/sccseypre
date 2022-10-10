<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato27 extends Model
{
    use HasFactory;

    protected $fillable =[
        'NOMBRE',
        'APELLIDO',
        'NUMERO_DE_CEDULA',
        'CARGO_SEGUN_ESTRUCTURA',
        'SALARIO_MENSUAL',
        'INICIO_DE_LABORES',
        'OBJETO_DE_GASTO',
        'ESTATUS',
    ];

}
