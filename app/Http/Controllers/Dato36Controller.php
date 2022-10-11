<?php

namespace App\Http\Controllers;

use App\Models\dato36;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato36Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato36 = dato36::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CEDULA', 'like', '%' . $search . '%');
            /* $query->where('CEDULA', $search); */
        })->paginate(50);

        $dato36 = cache('cachedb',$dato36,now()->addWeek());
        
        return Inertia::render('Datos/Dato36', ['dato36'=>$dato36, 'filters'=>$filters]);
    }
}
