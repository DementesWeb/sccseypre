<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dato18 extends Model
{
    use HasFactory;

    protected $fillable = [
        'NOMBRE',
        'APELLIDO',
        'CEDULA',
        'CARGO',
        'SALARIO_MENSUAL',
        'INICIO_DE_LABORES',
        'OBJETO_DE_GASTO',
        'ESTATUS',
    ];
}
