<?php

namespace App\Http\Controllers;

use App\Models\dato18;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato18Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato18 = dato18::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            /* $query->where('cedula', 'like', '%' . $search . '%'); */
            $query->where('CEDULA', $search);
        })->paginate(50);

        $dato18 = cache('cachedb',$dato18,now()->addWeek());
        
        return Inertia::render('Datos/Dato18', ['dato18'=>$dato18, 'filters'=>$filters]);
    }
}
