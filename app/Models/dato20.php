<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dato20 extends Model
{
    use HasFactory;

    protected $fillable = [
        'NOMBRE',
        'APELLIDO',
        'CEDULA',
        'CARGO',
        'SALARIO_MENSUAL',
        'FECHA_DE_INICIO',
        'ESTADO',
    ];

}
