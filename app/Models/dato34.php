<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dato34 extends Model
{
    use HasFactory;

    protected $fillable = [
        'FUNCIONARIO',
        'NUMERO_EMPLEADO',
        'CEDULA',
        'UBICACION',
        'FECHA_DE_INGRESO',
        'OBJETO',
        'POSICION',
        'ESTADO',
        'SALARIO',
    ];
}
