<?php

namespace App\Http\Controllers;

use App\Models\dato34;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato34Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato34 = dato34::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CEDULA', 'like', '%' . $search . '%');
            /* $query->where('CEDULA', $search); */
        })->paginate(50);

        $dato34 = cache('cachedb',$dato34,now()->addWeek());
        
        return Inertia::render('Datos/Dato34', ['dato34'=>$dato34, 'filters'=>$filters]);
    }
}
