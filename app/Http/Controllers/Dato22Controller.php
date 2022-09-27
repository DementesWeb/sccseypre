<?php

namespace App\Http\Controllers;

use App\Models\dato22;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato22Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato22 = dato22::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CEDULA', 'like', '%' . $search . '%');
            /* $query->where('CEDULA', $search); */
        })->paginate(50);

        $dato22 = cache('cachedb',$dato22,now()->addWeek());
        
        return Inertia::render('Datos/Dato22', ['dato22'=>$dato22, 'filters'=>$filters]);
    }
}

