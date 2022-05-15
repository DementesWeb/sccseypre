<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Dato4;
use Illuminate\Http\Request;

class Dato4Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $ceddato4 = Dato4::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CEDULA', 'like', '%' . $search . '%');
        })->paginate(6);
        return Inertia::render('Dato4/Dato4', ['ceddato4'=>$ceddato4, 'filters'=>$filters]);
    }
}
