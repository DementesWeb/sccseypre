<?php

namespace App\Http\Controllers;

use App\Models\Dato29;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato29Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato29 = Dato29::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CEDULA', 'like', '%' . $search . '%');
            /* $query->where('CEDULA', $search); */
        })->paginate(50);

        $dato29 = cache('cachedb',$dato29,now()->addWeek());
        
        return Inertia::render('Datos/Dato29', ['dato29'=>$dato29, 'filters'=>$filters]);
    }
}
