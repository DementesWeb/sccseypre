<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Dato2;
use Illuminate\Http\Request;

class Dato2Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $ceddato2 = Dato2::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('cedula',$search);
        })->paginate(6);

        $ceddato2 = cache('cachedb',$ceddato2,now()->addWeek());

        return Inertia::render('Dato2/Dato2', ['ceddato2'=>$ceddato2, 'filters'=>$filters]);
    }
}
