<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Dato7;
use Illuminate\Http\Request;

class Dato7Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $ceddato7 = Dato7::latest()
                    ->when($filters['search'] ?? null, function($query, $search){
                    $query->where('cedula',$search);
                    })->paginate(50);
        $ceddato7 = cache('cachedb',$ceddato7,now()->addWeek());
        return Inertia::render('Datos/Dato7', ['ceddato7'=>$ceddato7, 'filters'=>$filters]);
    }
}
