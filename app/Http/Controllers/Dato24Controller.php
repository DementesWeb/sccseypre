<?php

namespace App\Http\Controllers;

use App\Models\dato24;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato24Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato24 = dato24::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CEDULA', 'like', '%' . $search . '%');
            /* $query->where('CEDULA', $search); */
        })->paginate(50);

        $dato24 = cache('cachedb',$dato24,now()->addWeek());
        
        return Inertia::render('Datos/Dato24', ['dato24'=>$dato24, 'filters'=>$filters]);
    }
}
