<?php

namespace App\Http\Controllers;

use App\Models\Dato23;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato23Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato23 = Dato23::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CEDULA', 'like', '%' . $search . '%');
            /* $query->where('CEDULA', $search); */
        })->paginate(50);

        $dato23 = cache('cachedb',$dato23,now()->addWeek());
        
        return Inertia::render('Datos/Dato23', ['dato23'=>$dato23, 'filters'=>$filters]);
    }
}
