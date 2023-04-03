<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato39 extends Model
{
    use HasFactory;

    protected $fillable = [
        'NUMPANAPASS',
        'TIPODECUENTA',
        'TIPODEDOCUMENTO',
        'CEDULA',
        'NOMBRE',
        'DIRECCION',
        'TAG',
        'MATRICULA',
        'TEL1',
        'TEL2',
        'TEL3',
        'TEL4',
        'EMAIL',
        'TIPO_RECARGA',
        'NUM_TAGS',
    ];

}
