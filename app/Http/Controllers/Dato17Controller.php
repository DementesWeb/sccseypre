<?php

namespace App\Http\Controllers;

use App\Models\Dato17;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato17Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato17 = Dato17::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            /* $query->where('cedula', 'like', '%' . $search . '%'); */
            $query->where('CARGO', $search);
        })->paginate(50);

        $dato17 = cache('cachedb',$dato17,now()->addWeek());
        
        return Inertia::render('Datos/Dato17', ['dato17'=>$dato17, 'filters'=>$filters]);
    }
}
