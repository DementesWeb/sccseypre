<?php

namespace App\Http\Controllers;

use App\Models\dato20;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato20Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato20 = dato20::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CEDULA', 'like', '%' . $search . '%');
            /* $query->where('CEDULA', $search); */
        })->paginate(50);

        $dato20 = cache('cachedb',$dato20,now()->addWeek());
        
        return Inertia::render('Datos/Dato20', ['dato20'=>$dato20, 'filters'=>$filters]);
    }
}
