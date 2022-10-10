<?php

namespace App\Http\Controllers;

use App\Models\dato28;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato28Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato28 = dato28::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CEDULA', 'like', '%' . $search . '%');
            /* $query->where('CEDULA', $search); */
        })->paginate(50);

        $dato28 = cache('cachedb',$dato28,now()->addWeek());
        
        return Inertia::render('Datos/Dato28', ['dato28'=>$dato28, 'filters'=>$filters]);
    }
    
}
