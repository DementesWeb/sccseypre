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
use App\Models\Telefono;
use Illuminate\Http\Request;

class BusquedaCamposController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {

            $filters = $request->all('search');
            $ceddato1 = Dato1::latest()
                ->when($filters['search'] ?? null, function($query, $search){
                    $query->where('CEDULA','LIKE',"%".$search."%")
                    ->orWhere('BARRIO','LIKE',"%".$search."%")
                    ->orWhere('CELULAR','LIKE',"%".$search."%")
                    ->orWhere('EMAIL','LIKE',"%".$search."%");
                })->paginate(50);
            $ceddato2 = Dato2::latest()
                ->when($filters['search'] ?? null, function($query, $search){
                    $query->where('cedula','LIKE',"%".$search."%")
                    ->orWhere('celular','LIKE',"%".$search."%")
                    ->orWhere('direccion_fisica','LIKE',"%".$search."%")
                    ->orWhere('email','LIKE',"%".$search."%");
                })->paginate(50);
            $ceddato3 = Dato3::latest()
                ->when($filters['search'] ?? null, function($query, $search){
                    $query->where('CEDULA','LIKE',"%".$search."%")
                    ->orWhere('PRIMER_NOMBRE','LIKE',"%".$search."%")
                    ->orWhere('SEGUNDO_NOMBRE','LIKE',"%".$search."%")
                    ->orWhere('TELEFONO_RES','LIKE',"%".$search."%");
                })->paginate(50);
            $ceddato4 = Dato4::latest()
                ->when($filters['search'] ?? null, function($query, $search){
                    $query->where('CEDULA','LIKE',"%".$search."%")
                    ->orWhere('P_NOMBRE','LIKE',"%".$search."%")
                    ->orWhere('S_NOMBRE','LIKE',"%".$search."%")
                    ->orWhere('TEELFONO','LIKE',"%".$search."%");
                })->paginate(50);
            $ceddato5 = Dato5::latest()
                ->when($filters['search'] ?? null, function($query, $search){
                    $query->where('CEDULA','LIKE',"%".$search."%")
                    ->orWhere('DEP','LIKE',"%".$search."%");
                })->paginate(50);
            $cedtelefono = Telefono::latest()
                ->when($filters['search'] ?? null, function($query, $search){
                    $query->where('CED','LIKE',"%".$search."%")
                    ->orWhere('TEL1','LIKE',"%".$search."%")
                    ->orWhere('TEL2','LIKE',"%".$search."%")
                    ->orWhere('TEL3','LIKE',"%".$search."%")
                    ->orWhere('TEL4','LIKE',"%".$search."%")
                    ->orWhere('TEL5','LIKE',"%".$search."%")
                    ->orWhere('TEL6','LIKE',"%".$search."%")
                    ->orWhere('TEL7','LIKE',"%".$search."%")
                    ->orWhere('TEL8','LIKE',"%".$search."%")
                    ->orWhere('TEL9','LIKE',"%".$search."%")
                    ->orWhere('TEL10','LIKE',"%".$search."%")
                    ->orWhere('TEL11','LIKE',"%".$search."%")
                    ->orWhere('TEL12','LIKE',"%".$search."%")
                    ->orWhere('TEL13','LIKE',"%".$search."%")
                    ->orWhere('TEL14','LIKE',"%".$search."%")
                    ->orWhere('TEL15','LIKE',"%".$search."%");
                })->paginate(50);
            $customer = Customer::latest()
                ->when($filters['search'] ?? null, function($query, $search){
                    $query->where('CEDULA','LIKE',"%".$search."%");
                })->paginate(50);
                $ceddato6 = Dato6::latest()
                ->when($filters['search'] ?? null, function($query, $search){
                    $query->where('CEDULA','LIKE',"%".$search."%")
                    ->orWhere('NOMBRE','LIKE',"%".$search."%")
                    ->orWhere('BARRIADA','LIKE',"%".$search."%")
                    ->orWhere('CALLE','LIKE',"%".$search."%")
                    ->orWhere('CASA','LIKE',"%".$search."%")
                    ->orWhere('TELEFONO','LIKE',"%".$search."%");
                })->paginate(50);
            $ceddato7 = Dato7::latest()
                ->when($filters['search'] ?? null, function($query, $search){
                    $query->where('CEDULA','LIKE',"%".$search."%")
                    ->orWhere('empresa_1','LIKE',"%".$search."%")
                    ->orWhere('empresa_2','LIKE',"%".$search."%")
                    ->orWhere('numero_1','LIKE',"%".$search."%")
                    ->orWhere('numero_2','LIKE',"%".$search."%");
                })->paginate(50);
            $ceddato8 = Dato8::latest()
                ->when($filters['search'] ?? null, function($query, $search){
                    $query->where('CEDULA','LIKE',"%".$search."%")
                    ->orWhere('NOMBRE','LIKE',"%".$search."%")
                    ->orWhere('LUGAR_DE_TRABAJO','LIKE',"%".$search."%");
                })->paginate(50);
            $ceddato9 = Dato9::latest()
                ->when($filters['search'] ?? null, function($query, $search){
                    $query->where('CEDULA','LIKE',"%".$search."%")
                    ->orWhere('PROVINCIA','LIKE',"%".$search."%")
                    ->orWhere('DISTRITO','LIKE',"%".$search."%")
                    ->orWhere('NOMBRE','LIKE',"%".$search."%")
                    ->orWhere('BARRIO','LIKE',"%".$search."%")
                    ->orWhere('DIRECCION','LIKE',"%".$search."%")
                    ->orWhere('CELULAR','LIKE',"%".$search."%")
                    ->orWhere('CORREO','LIKE',"%".$search."%")
                    ->orWhere('CONDOMINIO','LIKE',"%".$search."%")
                    ->orWhere('CORREGIMIENTO','LIKE',"%".$search."%");
                })->paginate(50);
    
            return Inertia::render('BusquedaCampos/BusquedaCampos', ['ceddato1'=>$ceddato1,
                                                                        'ceddato2'=>$ceddato2,
                                                                        'ceddato3'=>$ceddato3,
                                                                        'ceddato4'=>$ceddato4,
                                                                        'ceddato5'=>$ceddato5,
                                                                        'ceddato6'=>$ceddato6,
                                                                        'ceddato7'=>$ceddato7,
                                                                        'ceddato8'=>$ceddato8,
                                                                        'ceddato9'=>$ceddato9,
                                                                        'cedtelefono'=>$cedtelefono,
                                                                        'customer'=>$customer,
                                                                        'filters'=>$filters]);
    }

}
