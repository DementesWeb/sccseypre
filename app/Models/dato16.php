<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dato16 extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'NOMBRE',
        'CEDULA',
        'CARGO',
        'UNIDAD',
        'FECHA_INICIO',
        'SALARIO',
        'SUB_SUELDO',
        'GASTO_REPRESENTACION',
        'TOTAL',
        'CODGAST',
        'ESTADO',
    ];
}
