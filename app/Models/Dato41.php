<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato41 extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'POS',
        'Cedula',
        'Nombre',
        'Cargo',
        'Departamento',
        'Estado',
        'F_Inicio',
        'Obj_Gasto',
        'Salario',
        'Gastos',
        'S_Sueldo',
        'Total',
    ];

}
