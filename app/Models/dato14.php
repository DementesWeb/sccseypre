<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dato14 extends Model
{
    use HasFactory;

    protected $fillable = [
        'APELLIDO',
        'NOMBRE',
        'CEDULA',
        'CARGO',
        'SALARIO_MENSUAL',
        'GASTO_DE_REPRESENTACIO',
        'TOTAL',
    ];
}
