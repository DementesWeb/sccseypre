<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato23 extends Model
{
    use HasFactory;

    protected $fillable = [
        'NOMBRE',
        'APELLIDO',
        'CEDULA',
        'CARGO_EN_FUNCION',
        'LUGAR_DONDE_LABORA',
        'SUELDO_B',
        'GASTOS_B',
        'SOBRESUELDO_B',
        'F_DE_INICIO',
        'OBJETO_DE_GASTO',
        'CONDICION_DEL_FUNCIONARIO',
    ];
}
