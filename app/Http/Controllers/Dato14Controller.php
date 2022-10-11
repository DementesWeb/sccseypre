<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\dato14;
use Illuminate\Http\Request;

class Dato14Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato14 = dato14::latest()
            ->when($filters['search'] ?? null, function($query, $search){
                $query->where('CEDULA', 'like', '%' . $search . '%');
                /* $query->where('CEDULA', $search); */
        })->paginate(50);

        $dato14 = cache('cachedb',$dato14,now()->addWeek());
        
        return Inertia::render('Datos/Dato14', ['dato14'=>$dato14, 'filters'=>$filters]);
    }
}