<?php

namespace App\Http\Controllers;

use App\Models\Dato27;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato27Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato27 = Dato27::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CEDULA', 'like', '%' . $search . '%');
            /* $query->where('CEDULA', $search); */
        })->paginate(50);

        $dato27 = cache('cachedb',$dato27,now()->addWeek());
        
        return Inertia::render('Datos/Dato27', ['dato27'=>$dato27, 'filters'=>$filters]);
    }
}
