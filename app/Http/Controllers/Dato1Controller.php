<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Dato1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class Dato1Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $ceddato1 = Dato1::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CEDULA',$search);
        })->paginate(50);

        $ceddato1 = cache('cachedb',$ceddato1,now()->addWeek());

        return Inertia::render('Datos/Dato1', ['ceddato1'=>$ceddato1, 'filters'=>$filters]);
    }
}
