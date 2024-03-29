<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Dato4;
use Illuminate\Http\Request;

class Dato4Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $ceddato4 = Dato4::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CEDULA',$search);
        })->paginate(50);

        $ceddato4 = cache('cachedb',$ceddato4,now()->addWeek());

        return Inertia::render('Datos/Dato4', ['ceddato4'=>$ceddato4, 'filters'=>$filters]);
    }
}
