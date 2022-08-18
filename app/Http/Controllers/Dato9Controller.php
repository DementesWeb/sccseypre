<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Dato9;
use Illuminate\Http\Request;

class Dato9Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $ceddato9 = Dato9::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            /* $query->where('cedula', 'like', '%' . $search . '%'); */
            $query->where('cedula', $search);
        })->paginate(50);

        $ceddato9 = cache('cachedb',$ceddato9,now()->addWeek());

        return Inertia::render('Dato9/Dato9', ['ceddato9'=>$ceddato9, 'filters'=>$filters]);
    }
}
