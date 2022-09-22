<?php

namespace App\Http\Controllers;

use App\Models\dato15;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato15Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato15 = dato15::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            /* $query->where('cedula', 'like', '%' . $search . '%'); */
            $query->where('CEDULA', $search);
        })->paginate(50);

        $dato15 = cache('cachedb',$dato15,now()->addWeek());
        return Inertia::render('Datos/Dato15', ['dato15'=>$dato15, 'filters'=>$filters]);
    }
}
