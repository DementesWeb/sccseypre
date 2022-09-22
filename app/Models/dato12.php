<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dato12 extends Model
{
    use HasFactory;

    protected $fillable = [
        'CEDULA',
        'NOMBRE',
        'FECHA_DE_INGRESO',
        'POSICION',
        'SALARIO',
        'GASTOS',
        'TOTAL',
        'EMPLEADO',
    ];
}
