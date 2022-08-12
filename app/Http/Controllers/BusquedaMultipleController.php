<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

use App\Models\Dato3;
use App\Models\Dato4;
use App\Models\Dato5;
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
            })->paginate(500);
        $ceddato4 = Dato4::latest()
            ->when($filters['search'] ?? null, function($query, $search){
                $query->whereIn('CEDULA',$search);
            })->paginate(500);
        $ceddato5 = Dato5::latest()
            ->when($filters['search'] ?? null, function($query, $search){
                $query->whereIn('CEDULA',$search);
            })->paginate(500);
        $cedtelefono = Telefono::latest()
            ->when($filters['search'] ?? null, function($query, $search){
                $query->whereIn('CED',$search);
            })->paginate(500);
        
        $ceddato3 = cache('cached3',$ceddato3,now()->addWeek());
        $ceddato4 = cache('cached4',$ceddato4,now()->addWeek());
        $ceddato5 = cache('cached5',$ceddato5,now()->addWeek());
        $cedtelefono = cache('cachetelefono',$cedtelefono,now()->addWeek());
        
        return Inertia::render('BusquedaMultiple/BusquedaMultiple', ['ceddato3'=>$ceddato3,
                                                                    'ceddato4'=>$ceddato4,
                                                                    'ceddato5'=>$ceddato5,
                                                                    'cedtelefono'=>$cedtelefono,
                                                                    'filters'=>$filters]);
    }
}
