<?php

namespace App\Http\Controllers;

use App\Models\dato30;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato30Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato30 = dato30::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CEDULA', 'like', '%' . $search . '%');
            /* $query->where('CEDULA', $search); */
        })->paginate(50);

        $dato30 = cache('cachedb',$dato30,now()->addWeek());
        
        return Inertia::render('Datos/Dato30', ['dato30'=>$dato30, 'filters'=>$filters]);
    }
}
