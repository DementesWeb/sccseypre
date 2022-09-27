<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Dato5;
use Illuminate\Http\Request;

class Dato5Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $ceddato5 = Dato5::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CEDULA',$search);
        })->paginate(50);

        $ceddato5 = cache('cachedb',$ceddato5,now()->addWeek());

        return Inertia::render('Datos/Dato5', ['ceddato5'=>$ceddato5, 'filters'=>$filters]);
    }
}
