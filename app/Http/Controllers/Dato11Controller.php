<?php

namespace App\Http\Controllers;

use App\Models\Dato11;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato11Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato11 = Dato11::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            /* $query->where('cedula', 'like', '%' . $search . '%'); */
            $query->where('CARGO', $search);
        })->paginate(50);

        $dato11 = cache('cachedb',$dato11,now()->addWeek());

        return Inertia::render('Datos/Dato11', ['dato11'=>$dato11, 'filters'=>$filters]);
    }
}
