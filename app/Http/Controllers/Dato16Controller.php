<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Dato16;
use Illuminate\Http\Request;

class Dato16Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato16 = Dato16::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            /* $query->where('cedula', 'like', '%' . $search . '%'); */
            $query->where('CEDULA', $search);
        })->paginate(50);

        $dato16 = cache('cachedb',$dato16,now()->addWeek());
        
        return Inertia::render('Datos/Dato16', ['dato16'=>$dato16, 'filters'=>$filters]);
    }
}
