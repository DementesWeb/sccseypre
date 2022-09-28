<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dato26 extends Model
{
    use HasFactory;

    protected $fillable =[
        'CEDULA',
        'FUNCIONARIO',
        'FECHA_NACIMIENTO',
        'FECHA_INGRESO',
        'CARGO_FUNCION',
        'SALARIO',
        'GASTO_DE_REP',
        'SOBRE_SUELDO_ANTIGUEDAD',
        'SOBRE_SUELDO_JEFATURA',
        'TIPO_CONTRATACION',
        'SEDE',
        'DEPARTAMENTO',
    ];


}
