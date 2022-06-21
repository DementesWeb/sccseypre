<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Dato8;
use Illuminate\Http\Request;

class Dato8Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $ceddato8 = Dato8::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CEDULA',$search);
        })->paginate(6);
        return Inertia::render('Dato8/Dato8', ['ceddato8'=>$ceddato8, 'filters'=>$filters]);
    }
}
