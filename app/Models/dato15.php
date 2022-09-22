<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dato15 extends Model
{
    use HasFactory;

    protected $fillable = [
        'NOMBRE',
        'CEDULA',
        'CARGO',
        'UNIDAD',
        'FECINI',
        'SALARIO',
        'SSUELDO',
        'GASTOREP',
        'TOTAL',
        'CODGAST',
        'ESTADO',
    ];

}
