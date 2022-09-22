<?php

namespace App\Http\Controllers;

use App\Models\Dato13;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato13Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato13 = Dato13::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            /* $query->where('cedula', 'like', '%' . $search . '%'); */
            $query->where('CEDULA', $search);
        })->paginate(50);

        $dato13 = cache('cachedb',$dato13,now()->addWeek());
        return Inertia::render('Datos/Dato13', ['dato13'=>$dato13, 'filters'=>$filters]);
    }
}
