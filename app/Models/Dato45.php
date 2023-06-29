<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato45 extends Model
{
    use HasFactory;

    protected $fillable = [
        'CEDULA',
        'NOMBRE',
        'SUSCRIPTOR',
        'BARRIO',
        'CELULAR',
        'TELEFONO',
        'SALDOCORRIENTE',
        'SALDO30',
        'SALDO60',
        'SALDO90',
        'SALDO90MAS',
        'ESTADO',
        'OBSERVACION',
        'PAGOMINIMO',
        'FECHAVENCE',
        'DESCSALDOCORRIENTE',
        'DESCSALDO30',
        'DESCSALDO60',
        'DESCSALDO90',
        'DESCSALDO90MAS',
        'OPT_02',
        'DEUDATOTAL',
        'CUENTA',
        'CUENTA_BARRIO',
        'NOMBRE_CUENTA'
    ];
}
