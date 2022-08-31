<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Dato10;
use Illuminate\Http\Request;

class Dato10Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $ceddato10 = Dato10::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            /* $query->where('cedula', 'like', '%' . $search . '%'); */
            $query->where('CARGO', $search);
        })->paginate(50);

        $ceddato10 = cache('cachedb',$ceddato10,now()->addWeek());

        return Inertia::render('Datos/Dato10', ['ceddato10'=>$ceddato10, 'filters'=>$filters]);
    }
}
