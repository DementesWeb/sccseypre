<?php

namespace App\Http\Controllers;

use App\Models\Dato33;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato33Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato33 = Dato33::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CEDULA', 'like', '%' . $search . '%');
            /* $query->where('CEDULA', $search); */
        })->paginate(50);

        $dato33 = cache('cachedb',$dato33,now()->addWeek());
        
        return Inertia::render('Datos/Dato33', ['dato33'=>$dato33, 'filters'=>$filters]);
    }
}
