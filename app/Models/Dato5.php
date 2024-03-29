<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato5 extends Model
{
    use HasFactory;

    protected $fillable = [
        'CEDULA',
        'NOMBRE',
        'SEXO',
        'SEGSOC',
        'PROV',
        'PLANILLA',
        'POSICION',
        'SAL_BR',
        'SAL_NETO',
        'DEP',
        'MINI_DES',
        'MINI',
        'DES_1',
        'DES_2',
        'DES_3',
        'DES_4',
        'DES_5',
        'DES_6',
        'COD_1',
        'COD_2',
        'COD_3',
        'COD_4',
        'COD_5',
    ];
}
