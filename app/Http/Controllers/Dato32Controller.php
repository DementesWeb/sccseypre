<?php

namespace App\Http\Controllers;

use App\Models\dato32;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato32Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato32 = dato32::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CEDULA', 'like', '%' . $search . '%');
            /* $query->where('CEDULA', $search); */
        })->paginate(50);

        $dato32 = cache('cachedb',$dato32,now()->addWeek());
        
        return Inertia::render('Datos/Dato32', ['dato32'=>$dato32, 'filters'=>$filters]);
    }
}
