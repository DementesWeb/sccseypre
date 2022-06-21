<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Dato1;
use Illuminate\Http\Request;

class Dato1Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $ceddato1 = Dato1::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CEDULA',$search);
        })->paginate(6);
        return Inertia::render('Dato1/Dato1', ['ceddato1'=>$ceddato1, 'filters'=>$filters]);
    }
}
