<?php

namespace App\Http\Controllers;

use App\Models\Dato35;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato35Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato35 = Dato35::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CEDULA', 'like', '%' . $search . '%');
            /* $query->where('CEDULA', $search); */
        })->paginate(50);

        $dato35 = cache('cachedb',$dato35,now()->addWeek());
        
        return Inertia::render('Datos/Dato35', ['dato35'=>$dato35, 'filters'=>$filters]);
    }
}
