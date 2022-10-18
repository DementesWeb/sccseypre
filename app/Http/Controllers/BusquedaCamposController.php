<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Dato1;
use App\Models\Dato2;
use App\Models\Dato3;
use App\Models\Dato4;
use App\Models\Dato5;
use App\Models\Dato6;
use App\Models\Dato7;
use App\Models\Dato8;
use App\Models\Dato9;
use App\Models\customer;
use App\Models\dato10;
<<<<<<< HEAD
=======
use App\Models\Dato11;
use App\Models\dato12;
use App\Models\Dato13;
use App\Models\dato14;
use App\Models\dato15;
use App\Models\dato16;
use App\Models\Dato17;
use App\Models\dato18;
use App\Models\Dato19;
use App\Models\dato20;
use App\Models\Dato21;
use App\Models\dato22;
use App\Models\Dato23;
use App\Models\dato24;
use App\Models\Dato25;
use App\Models\dato26;
use App\Models\Dato27;
use App\Models\dato28;
use App\Models\Dato29;
use App\Models\dato30;
use App\Models\Dato31;
use App\Models\dato32;
use App\Models\Dato33;
use App\Models\dato34;
use App\Models\Dato35;
use App\Models\dato36;
>>>>>>> 1fe5fe28dcd006862c1ff76160ab5f4b5b656aa7
use App\Models\Telefono;
use Illuminate\Http\Request;

class BusquedaCamposController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $ceddato1 = Dato1::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('BARRIO', 'LIKE', "%" . $search . "%")
                    ->orWhere('CELULAR', 'LIKE', "%" . $search . "%")
                    ->orWhere('EMAIL', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $ceddato2 = Dato2::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('cedula', 'LIKE', "%" . $search . "%")
                    ->orWhere('celular', 'LIKE', "%" . $search . "%")
                    ->orWhere('direccion_fisica', 'LIKE', "%" . $search . "%")
                    ->orWhere('email', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $ceddato3 = Dato3::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('PRIMER_NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('SEGUNDO_NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('TELEFONO_RES', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $ceddato4 = Dato4::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('P_NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('S_NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('TEELFONO', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $ceddato5 = Dato5::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('DEP', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $cedtelefono = Telefono::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CED', 'LIKE', "%" . $search . "%")
                    ->orWhere('TEL1', 'LIKE', "%" . $search . "%")
                    ->orWhere('TEL2', 'LIKE', "%" . $search . "%")
                    ->orWhere('TEL3', 'LIKE', "%" . $search . "%")
                    ->orWhere('TEL4', 'LIKE', "%" . $search . "%")
                    ->orWhere('TEL5', 'LIKE', "%" . $search . "%")
                    ->orWhere('TEL6', 'LIKE', "%" . $search . "%")
                    ->orWhere('TEL7', 'LIKE', "%" . $search . "%")
                    ->orWhere('TEL8', 'LIKE', "%" . $search . "%")
                    ->orWhere('TEL9', 'LIKE', "%" . $search . "%")
                    ->orWhere('TEL10', 'LIKE', "%" . $search . "%")
                    ->orWhere('TEL11', 'LIKE', "%" . $search . "%")
                    ->orWhere('TEL12', 'LIKE', "%" . $search . "%")
                    ->orWhere('TEL13', 'LIKE', "%" . $search . "%")
                    ->orWhere('TEL14', 'LIKE', "%" . $search . "%")
                    ->orWhere('TEL15', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $customer = customer::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $ceddato6 = Dato6::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('BARRIADA', 'LIKE', "%" . $search . "%")
                    ->orWhere('CALLE', 'LIKE', "%" . $search . "%")
                    ->orWhere('CASA', 'LIKE', "%" . $search . "%")
                    ->orWhere('TELEFONO', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $ceddato7 = Dato7::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('empresa_1', 'LIKE', "%" . $search . "%")
                    ->orWhere('empresa_2', 'LIKE', "%" . $search . "%")
                    ->orWhere('numero_1', 'LIKE', "%" . $search . "%")
                    ->orWhere('numero_2', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $ceddato8 = Dato8::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('LUGAR_DE_TRABAJO', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $ceddato9 = Dato9::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('PROVINCIA', 'LIKE', "%" . $search . "%")
                    ->orWhere('DISTRITO', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('BARRIO', 'LIKE', "%" . $search . "%")
                    ->orWhere('DIRECCION', 'LIKE', "%" . $search . "%")
                    ->orWhere('CELULAR', 'LIKE', "%" . $search . "%")
                    ->orWhere('CORREO', 'LIKE', "%" . $search . "%")
                    ->orWhere('CONDOMINIO', 'LIKE', "%" . $search . "%")
                    ->orWhere('CORREGIMIENTO', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $ceddato10 = dato10::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CARGO', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('APELLIDOS', 'LIKE', "%" . $search . "%")
                    ->orWhere('SALARIO', 'LIKE', "%" . $search . "%")
                    ->orWhere('INICIO_DE_LABORES', 'LIKE', "%" . $search . "%")
                    ->orWhere('OBJETIVO_DE_GASTO', 'LIKE', "%" . $search . "%")
                    ->orWhere('ESTATUS', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $dato11 = Dato11::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CARGO', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('APELLIDOS', 'LIKE', "%" . $search . "%")
                    ->orWhere('SALARIO', 'LIKE', "%" . $search . "%")
                    ->orWhere('INICIO_DE_LABORES', 'LIKE', "%" . $search . "%")
                    ->orWhere('OBJETIVO_DE_GASTO', 'LIKE', "%" . $search . "%")
                    ->orWhere('ESTATUS', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $ceddato12 = dato12::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('FECHA_DE_INGRESO', 'LIKE', "%" . $search . "%")
                    ->orWhere('POSICION', 'LIKE', "%" . $search . "%")
                    ->orWhere('SALARIO', 'LIKE', "%" . $search . "%")
                    ->orWhere('GASTOS', 'LIKE', "%" . $search . "%")
                    ->orWhere('TOTAL', 'LIKE', "%" . $search . "%")
                    ->orWhere('EMPLEADO', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $dato13 = Dato13::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('APELLIDO', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('CARGO', 'LIKE', "%" . $search . "%")
                    ->orWhere('SALARIO_MENSUAL', 'LIKE', "%" . $search . "%")
                    ->orWhere('INICIO_DE_LABORES', 'LIKE', "%" . $search . "%")
                    ->orWhere('OBJETIVO_DE_GASTO', 'LIKE', "%" . $search . "%")
                    ->orWhere('ESTATUS', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $dato14 = dato14::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('APELLIDO', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('CARGO', 'LIKE', "%" . $search . "%")
                    ->orWhere('SALARIO_MENSUAL', 'LIKE', "%" . $search . "%")
                    ->orWhere('GASTO_DE_REPRESENTACIO', 'LIKE', "%" . $search . "%")
                    ->orWhere('TOTAL', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $dato15 = dato15::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('CARGO', 'LIKE', "%" . $search . "%")
                    ->orWhere('UNIDAD', 'LIKE', "%" . $search . "%")
                    ->orWhere('FECINI', 'LIKE', "%" . $search . "%")
                    ->orWhere('SALARIO', 'LIKE', "%" . $search . "%")
                    ->orWhere('SSUELDO', 'LIKE', "%" . $search . "%")
                    ->orWhere('GASTOREP', 'LIKE', "%" . $search . "%")
                    ->orWhere('TOTAL', 'LIKE', "%" . $search . "%")
                    ->orWhere('CODGAST', 'LIKE', "%" . $search . "%")
                    ->orWhere('ESTADO', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $dato16 = dato16::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('CARGO', 'LIKE', "%" . $search . "%")
                    ->orWhere('UNIDAD', 'LIKE', "%" . $search . "%")
                    ->orWhere('FECHA_INICIO', 'LIKE', "%" . $search . "%")
                    ->orWhere('SALARIO', 'LIKE', "%" . $search . "%")
                    ->orWhere('SUB_SUELDO', 'LIKE', "%" . $search . "%")
                    ->orWhere('GASTO_REPRESENTACION', 'LIKE', "%" . $search . "%")
                    ->orWhere('TOTAL', 'LIKE', "%" . $search . "%")
                    ->orWhere('CODGAST', 'LIKE', "%" . $search . "%")
                    ->orWhere('ESTADO', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $dato17 = Dato17::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CARGO', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE_Y_APELLIDO', 'LIKE', "%" . $search . "%")
                    ->orWhere('ESTADO', 'LIKE', "%" . $search . "%")
                    ->orWhere('ESC_SALARIAL', 'LIKE', "%" . $search . "%")
                    ->orWhere('ASIGNADO', 'LIKE', "%" . $search . "%")
                    ->orWhere('SALARIO', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $dato18 = dato18::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('APELLIDO', 'LIKE', "%" . $search . "%")
                    ->orWhere('CARGO', 'LIKE', "%" . $search . "%")
                    ->orWhere('SALARIO_MENSUAL', 'LIKE', "%" . $search . "%")
                    ->orWhere('INICIO_DE_LABORES', 'LIKE', "%" . $search . "%")
                    ->orWhere('OBJETO_DE_GASTO', 'LIKE', "%" . $search . "%")
                    ->orWhere('ESTATUS', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $dato19 = Dato19::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('SEXO', 'LIKE', "%" . $search . "%")
                    ->orWhere('SEGSOC', 'LIKE', "%" . $search . "%")
                    ->orWhere('PROV', 'LIKE', "%" . $search . "%")
                    ->orWhere('PLANILLA', 'LIKE', "%" . $search . "%")
                    ->orWhere('POSICION', 'LIKE', "%" . $search . "%")
                    ->orWhere('SAL_BR', 'LIKE', "%" . $search . "%")
                    ->orWhere('SAL_NETO', 'LIKE', "%" . $search . "%")
                    ->orWhere('DEP', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $dato20 = dato20::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('APELLIDO', 'LIKE', "%" . $search . "%")
                    ->orWhere('CARGO', 'LIKE', "%" . $search . "%")
                    ->orWhere('SALARIO_MENSUAL', 'LIKE', "%" . $search . "%")
                    ->orWhere('FECHA_DE_INICIO', 'LIKE', "%" . $search . "%")
                    ->orWhere('ESTADO', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $dato21 = Dato21::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('CONDICION_DEL_NOMBRAMIENTO', 'LIKE', "%" . $search . "%")
                    ->orWhere('SEXO', 'LIKE', "%" . $search . "%")
                    ->orWhere('APELLIDO_PATERNO', 'LIKE', "%" . $search . "%")
                    ->orWhere('APELLIDO_MATERNO', 'LIKE', "%" . $search . "%")
                    ->orWhere('APELLIDO_DE_CASADA', 'LIKE', "%" . $search . "%")
                    ->orWhere('PRIMER_NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('SEGUNDO_NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('CARGO_REAL', 'LIKE', "%" . $search . "%")
                    ->orWhere('GASTO_DE_REPRESENTACION', 'LIKE', "%" . $search . "%")
                    ->orWhere('SALARIO_SEGUN_PLANILLA', 'LIKE', "%" . $search . "%")
                    ->orWhere('AREA', 'LIKE', "%" . $search . "%")
                    ->orWhere('FECHA_DE_INICIO', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $dato22 = dato22::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('CARGO', 'LIKE', "%" . $search . "%")
                    ->orWhere('CARGO', 'LIKE', "%" . $search . "%")
                    ->orWhere('SALARIO', 'LIKE', "%" . $search . "%")
                    ->orWhere('DIRECCION_LABORAL', 'LIKE', "%" . $search . "%")
                    ->orWhere('FECHA_DE_NOMBRAMIENTO', 'LIKE', "%" . $search . "%")
                    ->orWhere('CONDICION_LABORAL', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $dato23 = Dato23::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('APELLIDO', 'LIKE', "%" . $search . "%")
                    ->orWhere('CARGO_EN_FUNCION', 'LIKE', "%" . $search . "%")
                    ->orWhere('LUGAR_DONDE_LABORA', 'LIKE', "%" . $search . "%")
                    ->orWhere('SUELDO_B', 'LIKE', "%" . $search . "%")
                    ->orWhere('GASTOS_B', 'LIKE', "%" . $search . "%")
                    ->orWhere('SOBRESUELDO_B', 'LIKE', "%" . $search . "%")
                    ->orWhere('F_DE_INICIO', 'LIKE', "%" . $search . "%")
                    ->orWhere('OBJETO_DE_GASTO', 'LIKE', "%" . $search . "%")
                    ->orWhere('CONDICION_DEL_FUNCIONARIO', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $dato24 = dato24::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('APELLIDO', 'LIKE', "%" . $search . "%")
                    ->orWhere('CARGO', 'LIKE', "%" . $search . "%")
                    ->orWhere('SALARIO', 'LIKE', "%" . $search . "%")
                    ->orWhere('INICIO_DE_LABORES', 'LIKE', "%" . $search . "%")
                    ->orWhere('OBJETO_DE_GASTO', 'LIKE', "%" . $search . "%")
                    ->orWhere('ESTATUS', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $dato25 = Dato25::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('PUESTO', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('APELLIDO', 'LIKE', "%" . $search . "%")
                    ->orWhere('SALARIO_MENSUAL', 'LIKE', "%" . $search . "%")
                    ->orWhere('OBJETO_DE_GASTO', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $dato26 = dato26::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('FUNCIONARIO', 'LIKE', "%" . $search . "%")
                    ->orWhere('FECHA_NACIMIENTO', 'LIKE', "%" . $search . "%")
                    ->orWhere('FECHA_INGRESO', 'LIKE', "%" . $search . "%")
                    ->orWhere('CARGO_FUNCION', 'LIKE', "%" . $search . "%")
                    ->orWhere('SALARIO', 'LIKE', "%" . $search . "%")
                    ->orWhere('GASTO_DE_REP', 'LIKE', "%" . $search . "%")
                    ->orWhere('SOBRE_SUELDO_ANTIGUEDAD', 'LIKE', "%" . $search . "%")
                    ->orWhere('TIPO_CONTRATACION', 'LIKE', "%" . $search . "%")
                    ->orWhere('SEDE', 'LIKE', "%" . $search . "%")
                    ->orWhere('DEPARTAMENTO', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $dato27 = Dato27::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('NUMERO_DE_CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('APELLIDO', 'LIKE', "%" . $search . "%")
                    ->orWhere('CARGO_SEGUN_ESTRUCTURA', 'LIKE', "%" . $search . "%")
                    ->orWhere('SALARIO_MENSUAL', 'LIKE', "%" . $search . "%")
                    ->orWhere('INICIO_DE_LABORES', 'LIKE', "%" . $search . "%")
                    ->orWhere('OBJETO_DE_GASTO', 'LIKE', "%" . $search . "%")
                    ->orWhere('ESTATUS', 'LIKE', "%" . $search . "%");;
            })->paginate(50);
        $dato28 = dato28::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('APELLIDO', 'LIKE', "%" . $search . "%")
                    ->orWhere('CARGO', 'LIKE', "%" . $search . "%")
                    ->orWhere('SALARIO_MENSUAL', 'LIKE', "%" . $search . "%")
                    ->orWhere('INICIO_DE_LABORES', 'LIKE', "%" . $search . "%")
                    ->orWhere('OBJETO_DE_GASTO', 'LIKE', "%" . $search . "%")
                    ->orWhere('ESTATUS', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $dato29 = Dato29::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('APELLIDO', 'LIKE', "%" . $search . "%")
                    ->orWhere('CARGO', 'LIKE', "%" . $search . "%")
                    ->orWhere('UNIDAD', 'LIKE', "%" . $search . "%")
                    ->orWhere('SALARIO', 'LIKE', "%" . $search . "%")
                    ->orWhere('ANTIGUEDAD', 'LIKE', "%" . $search . "%")
                    ->orWhere('OBJETOGASTO', 'LIKE', "%" . $search . "%")
                    ->orWhere('FECHAINGRESO', 'LIKE', "%" . $search . "%")
                    ->orWhere('ESTATUS', 'LIKE', "%" . $search . "%")
                    ->orWhere('TOTAL', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $dato30 = dato30::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('APELLIDO', 'LIKE', "%" . $search . "%")
                    ->orWhere('CARGO', 'LIKE', "%" . $search . "%")
                    ->orWhere('SALARIO_MENSUAL', 'LIKE', "%" . $search . "%")
                    ->orWhere('INICIO_DE_LABORES', 'LIKE', "%" . $search . "%")
                    ->orWhere('OBJETO_DE_GASTO', 'LIKE', "%" . $search . "%")
                    ->orWhere('ESTATUS', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $dato31 = Dato31::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('N_TEL', 'LIKE', "%" . $search . "%")
                    ->orWhere('PRIMER_NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('TEL', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $dato32 = dato32::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('APELLIDO', 'LIKE', "%" . $search . "%")
                    ->orWhere('TIPO_DE_CONTRATO', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $dato33 = Dato33::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('CARGO', 'LIKE', "%" . $search . "%")
                    ->orWhere('SALARIO', 'LIKE', "%" . $search . "%")
                    ->orWhere('CONDICION', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $dato34 = dato34::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('FUNCIONARIO', 'LIKE', "%" . $search . "%")
                    ->orWhere('NUMERO_EMPLEADO', 'LIKE', "%" . $search . "%")
                    ->orWhere('UBICACION', 'LIKE', "%" . $search . "%")
                    ->orWhere('FECHA_DE_INGRESO', 'LIKE', "%" . $search . "%")
                    ->orWhere('OBJETO', 'LIKE', "%" . $search . "%")
                    ->orWhere('POSICION', 'LIKE', "%" . $search . "%")
                    ->orWhere('ESTADO', 'LIKE', "%" . $search . "%")
                    ->orWhere('SALARIO', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $dato35 = Dato35::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('APELLIDO', 'LIKE', "%" . $search . "%")
                    ->orWhere('CARGO', 'LIKE', "%" . $search . "%")
                    ->orWhere('UNIDAD', 'LIKE', "%" . $search . "%")
                    ->orWhere('SALARIO', 'LIKE', "%" . $search . "%")
                    ->orWhere('ANTIGUEDAD', 'LIKE', "%" . $search . "%")
                    ->orWhere('OBJETOGASTO', 'LIKE', "%" . $search . "%")
                    ->orWhere('FECHAINGRESO', 'LIKE', "%" . $search . "%")
                    ->orWhere('ESTATUS', 'LIKE', "%" . $search . "%")
                    ->orWhere('TOTAL', 'LIKE', "%" . $search . "%");
            })->paginate(50);
        $dato36 = dato36::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'LIKE', "%" . $search . "%")
                    ->orWhere('NOMBRE', 'LIKE', "%" . $search . "%")
                    ->orWhere('SEXO', 'LIKE', "%" . $search . "%")
                    ->orWhere('SEGSOC', 'LIKE', "%" . $search . "%")
                    ->orWhere('PROV', 'LIKE', "%" . $search . "%")
                    ->orWhere('PLANILLA', 'LIKE', "%" . $search . "%")
                    ->orWhere('POSICION', 'LIKE', "%" . $search . "%")
                    ->orWhere('SAL_BR', 'LIKE', "%" . $search . "%")
                    ->orWhere('SAL_NETO', 'LIKE', "%" . $search . "%")
                    ->orWhere('DEP', 'LIKE', "%" . $search . "%")
                    ->orWhere('MINI_DES', 'LIKE', "%" . $search . "%")
                    ->orWhere('MINI', 'LIKE', "%" . $search . "%");
            })->paginate(50);

<<<<<<< HEAD
            $dato10 = dato10::latest()
            ->when($filters['search'] ?? null, function($query, $search){
                $query->where('NOMBRE','LIKE',"%".$search."%")
                ->orWhere('APELLIDO','LIKE',"%".$search."%")
                ->orWhere('CARGO','LIKE',"%".$search."%");
            })->paginate(50);

        $ceddato1 = cache('cached1',$ceddato1,now()->addWeek());
        $ceddato2 = cache('cached2',$ceddato2,now()->addWeek());
        $ceddato3 = cache('cached3',$ceddato3,now()->addWeek());
        $ceddato4 = cache('cached4',$ceddato4,now()->addWeek());
        $ceddato5 = cache('cached5',$ceddato5,now()->addWeek());
        $ceddato6 = cache('cached6',$ceddato6,now()->addWeek());
        $ceddato7 = cache('cached7',$ceddato7,now()->addWeek());
        $ceddato8 = cache('cached8',$ceddato8,now()->addWeek());
        $ceddato9 = cache('cached9',$ceddato9,now()->addWeek());
        $cedtelefono = cache('cachetelefono',$cedtelefono,now()->addWeek());
        $customer = cache('cachecustomer',$customer,now()->addWeek());
        $dato10 = cache('dato10',$dato10,now()->addWeek());

        return Inertia::render('BusquedaCampos/BusquedaCampos', ['ceddato1'=>$ceddato1,
                                                                    'ceddato2'=>$ceddato2,
                                                                    'ceddato3'=>$ceddato3,
                                                                    'ceddato4'=>$ceddato4,
                                                                    'ceddato5'=>$ceddato5,
                                                                    'ceddato6'=>$ceddato6,
                                                                    'ceddato7'=>$ceddato7,
                                                                    'ceddato8'=>$ceddato8,
                                                                    'ceddato9'=>$ceddato9,
                                                                    'dato10'=>$dato10,
                                                                    'cedtelefono'=>$cedtelefono,
                                                                    'customer'=>$customer,
                                                                    'filters'=>$filters]);
=======
        $ceddato1 = cache('cached1', $ceddato1, now()->addWeek());
        $ceddato2 = cache('cached2', $ceddato2, now()->addWeek());
        $ceddato3 = cache('cached3', $ceddato3, now()->addWeek());
        $ceddato4 = cache('cached4', $ceddato4, now()->addWeek());
        $ceddato5 = cache('cached5', $ceddato5, now()->addWeek());
        $ceddato6 = cache('cached6', $ceddato6, now()->addWeek());
        $ceddato7 = cache('cached7', $ceddato7, now()->addWeek());
        $ceddato8 = cache('cached8', $ceddato8, now()->addWeek());
        $ceddato9 = cache('cached9', $ceddato9, now()->addWeek());
        $ceddato10 = cache('cached10', $ceddato10, now()->addWeek());
        $dato11 = cache('cached11', $dato11, now()->addWeek());
        $ceddato12 = cache('cached12', $ceddato12, now()->addWeek());
        $dato13 = cache('cached13', $dato13, now()->addWeek());
        $dato14 = cache('cached14', $dato14, now()->addWeek());
        $dato15 = cache('cached15', $dato15, now()->addWeek());
        $dato16 = cache('cached16', $dato16, now()->addWeek());
        $dato17 = cache('cached17', $dato17, now()->addWeek());
        $dato18 = cache('cached18', $dato18, now()->addWeek());
        $dato19 = cache('cached19', $dato19, now()->addWeek());
        $dato20 = cache('cached20', $dato20, now()->addWeek());
        $dato21 = cache('cached21', $dato21, now()->addWeek());
        $dato22 = cache('cached22', $dato22, now()->addWeek());
        $dato23 = cache('cached23', $dato23, now()->addWeek());
        $dato24 = cache('cached24', $dato24, now()->addWeek());
        $dato25 = cache('cached25', $dato25, now()->addWeek());
        $dato26 = cache('cached26', $dato26, now()->addWeek());
        $dato27 = cache('cached27', $dato27, now()->addWeek());
        $dato28 = cache('cached28', $dato28, now()->addWeek());
        $dato29 = cache('cached29', $dato29, now()->addWeek());
        $dato30 = cache('cached30', $dato30, now()->addWeek());
        $dato31 = cache('cached31', $dato31, now()->addWeek());
        $dato32 = cache('cached32', $dato32, now()->addWeek());
        $dato33 = cache('cached33', $dato33, now()->addWeek());
        $dato34 = cache('cached34', $dato34, now()->addWeek());
        $dato35 = cache('cached35', $dato35, now()->addWeek());
        $dato36 = cache('cached36', $dato36, now()->addWeek());
        $cedtelefono = cache('cachetelefono', $cedtelefono, now()->addWeek());
        $customer = cache('cachecustomer', $customer, now()->addWeek());

        return Inertia::render('BusquedaCampos/BusquedaCampos', [
            'ceddato1' => $ceddato1,
            'ceddato2' => $ceddato2,
            'ceddato3' => $ceddato3,
            'ceddato4' => $ceddato4,
            'ceddato5' => $ceddato5,
            'ceddato6' => $ceddato6,
            'ceddato7' => $ceddato7,
            'ceddato8' => $ceddato8,
            'ceddato9' => $ceddato9,
            'ceddato10' => $ceddato10,
            'dato11' => $dato11,
            'ceddato12' => $ceddato12,
            'dato13' => $dato13,
            'dato14' => $dato14,
            'dato15' => $dato15,
            'dato16' => $dato16,
            'dato17' => $dato17,
            'dato18' => $dato18,
            'dato19' => $dato19,
            'dato20' => $dato20,
            'dato21' => $dato21,
            'dato22' => $dato22,
            'dato23' => $dato23,
            'dato24' => $dato24,
            'dato25' => $dato25,
            'dato26' => $dato26,
            'dato27' => $dato27,
            'dato28' => $dato28,
            'dato29' => $dato29,
            'dato30' => $dato30,
            'dato31' => $dato31,
            'dato32' => $dato32,
            'dato33' => $dato33,
            'dato34' => $dato34,
            'dato35' => $dato35,
            'dato36' => $dato36,
            'cedtelefono' => $cedtelefono,
            'customer' => $customer,
            'filters' => $filters
        ]);
>>>>>>> 1fe5fe28dcd006862c1ff76160ab5f4b5b656aa7
    }
}
