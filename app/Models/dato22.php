<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dato22 extends Model
{
    use HasFactory;
    protected $fillable = [
        'NOMBRE',
        'CEDULA',
        'CARGO',
        'SALARIO',
        'DIRECCION_LABORAL',
        'FECHA_DE_NOMBRAMIENTO',
        'CONDICION_LABORAL',
    ];
            
}
