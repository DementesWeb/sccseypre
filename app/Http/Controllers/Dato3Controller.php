<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Dato3;
use Illuminate\Http\Request;

class Dato3Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $ceddato3 = Dato3::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CEDULA',$search);
        })->paginate(6);

        $ceddato3 = cache('cachedb',$ceddato3,now()->addWeek());
        
        return Inertia::render('Dato3/Dato3', ['ceddato3'=>$ceddato3, 'filters'=>$filters]);
    }
}
