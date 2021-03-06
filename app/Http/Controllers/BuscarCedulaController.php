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

class BuscarCedulaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $ceddato1 = Dato1::latest()
            ->when($filters['search'] ?? null, function($query, $search){
                $query->where('CEDULA',$search);
            })->paginate(6);
        $ceddato2 = Dato2::latest()
            ->when($filters['search'] ?? null, function($query, $search){
                $query->where('cedula',$search);
            })->paginate(6);
        $ceddato3 = Dato3::latest()
            ->when($filters['search'] ?? null, function($query, $search){
                $query->where('CEDULA',$search);
            })->paginate(6);
        $ceddato4 = Dato4::latest()
            ->when($filters['search'] ?? null, function($query, $search){
                $query->where('CEDULA',$search);
            })->paginate(6);
        $ceddato5 = Dato5::latest()
            ->when($filters['search'] ?? null, function($query, $search){
                $query->where('CEDULA',$search);
            })->paginate(6);
        $cedtelefono = Telefono::latest()
            ->when($filters['search'] ?? null, function($query, $search){
                $query->where('CED',$search);
            })->paginate(6);
        $customer = Customer::latest()
            ->when($filters['search'] ?? null, function($query, $search){
                $query->where('cedula',$search);
            })->paginate(6);
            $ceddato6 = Dato6::latest()
            ->when($filters['search'] ?? null, function($query, $search){
                $query->where('CEDULA',$search);
            })->paginate(6);
        $ceddato7 = Dato7::latest()
            ->when($filters['search'] ?? null, function($query, $search){
                $query->where('cedula',$search);
            })->paginate(6);
        $ceddato8 = Dato8::latest()
            ->when($filters['search'] ?? null, function($query, $search){
                $query->where('CEDULA',$search);
            })->paginate(6);
        $ceddato9 = Dato9::latest()
            ->when($filters['search'] ?? null, function($query, $search){
                $query->where('CEDULA',$search);
            })->paginate(6);

        return Inertia::render('BuscarCedula/BuscarCedula', ['ceddato1'=>$ceddato1,
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
