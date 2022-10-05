<?php

namespace App\Http\Controllers;

use App\Models\Dato25;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato25Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato25 = Dato25::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('PUESTO', 'like', '%' . $search . '%');
            /* $query->where('CEDULA', $search); */
        })->paginate(50);

        $dato25 = cache('cachedb',$dato25,now()->addWeek());
        
        return Inertia::render('Datos/Dato25', ['dato25'=>$dato25, 'filters'=>$filters]);
    }
}
