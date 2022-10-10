<?php

namespace App\Http\Controllers;

use App\Models\Dato31;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato31Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato31 = Dato31::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CEDULA', 'like', '%' . $search . '%');
            /* $query->where('CEDULA', $search); */
        })->paginate(50);

        $dato31 = cache('cachedb',$dato31,now()->addWeek());
        
        return Inertia::render('Datos/Dato31', ['dato31'=>$dato31, 'filters'=>$filters]);
    }
}
