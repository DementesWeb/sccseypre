<?php

namespace App\Http\Controllers;

use App\Models\Dato21;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato21Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato21 = Dato21::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CEDULA', 'like', '%' . $search . '%');
            /* $query->where('CEDULA', $search); */
        })->paginate(50);

        $dato21 = cache('cachedb',$dato21,now()->addWeek());
        
        return Inertia::render('Datos/Dato21', ['dato21'=>$dato21, 'filters'=>$filters]);
    }
}
