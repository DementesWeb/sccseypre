<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\dato12;
use Illuminate\Http\Request;

class Dato12Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $ceddato12 = dato12::latest()
            ->when($filters['search'] ?? null, function($query, $search){
                $query->where('CEDULA', 'like', '%' . $search . '%');
                /* $query->where('CEDULA', $search); */
        })->paginate(50);

        $ceddato12 = cache('cachedb',$ceddato12,now()->addWeek());

        return Inertia::render('Datos/Dato12', ['ceddato12'=>$ceddato12, 'filters'=>$filters]);
    }
}
