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

class BusquedaMultipleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        
        $ceddato3 = Dato3::latest()
            ->when($filters['search'] ?? null, function($query, $search){
                $query->whereIn('CEDULA',$search);
            })->paginate(5000);
        $ceddato4 = Dato4::latest()
            ->when($filters['search'] ?? null, function($query, $search){
                $query->whereIn('CEDULA',$search);
            })->paginate(5000);
        $ceddato5 = Dato5::latest()
            ->when($filters['search'] ?? null, function($query, $search){
                $query->whereIn('CEDULA',$search);
            })->paginate(5000);
        $cedtelefono = Telefono::latest()
            ->when($filters['search'] ?? null, function($query, $search){
                $query->whereIn('CED',$search);
            })->paginate(5000);
       

        return Inertia::render('BusquedaMultiple/BusquedaMultiple', ['ceddato3'=>$ceddato3,
                                                                    'ceddato4'=>$ceddato4,
                                                                    'ceddato5'=>$ceddato5,
                                                                    'cedtelefono'=>$cedtelefono,
                                                                    'filters'=>$filters]);
    }
}
