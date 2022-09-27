<?php

namespace App\Http\Controllers;

use App\Models\Dato19;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato19Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato19 = Dato19::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            /* $query->where('cedula', 'like', '%' . $search . '%'); */
            $query->where('CEDULA', $search);
        })->paginate(50);

        $dato19 = cache('cachedb',$dato19,now()->addWeek());
        
        return Inertia::render('Datos/Dato19', ['dato19'=>$dato19, 'filters'=>$filters]);
    }
}
