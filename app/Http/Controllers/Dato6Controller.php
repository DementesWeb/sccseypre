<?php

namespace App\Http\Controllers;


use Inertia\Inertia;
use App\Models\Dato6;
use Illuminate\Http\Request;

class Dato6Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $ceddato6 = Dato6::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CEDULA',$search);
        })->paginate(50);

        $ceddato6 = cache('cachedb',$ceddato6,now()->addWeek());

        return Inertia::render('Datos/Dato6', ['ceddato6'=>$ceddato6, 'filters'=>$filters]);
    }
}
