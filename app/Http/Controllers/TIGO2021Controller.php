<?php

namespace App\Http\Controllers;

use App\Models\TIGO_2021;
use Inertia\Inertia;
use Illuminate\Http\Request;

class TIGO2021Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $cedulatigo = TIGO_2021::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CED', 'like', '%' . $search . '%');
        })->paginate();
        return Inertia::render('Tigo_2021/Index', ['cedulatigo'=>$cedulatigo, 'filters'=>$filters]);
    }
}
