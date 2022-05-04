<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\TelFinal;
use Illuminate\Http\Request;

class TelFinalController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $cedulatelfinal = TelFinal::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CED', 'like', '%' . $search . '%');
        })->paginate(6);
        return Inertia::render('Consultacedula/Index', ['cedulatelfinal'=>$cedulatelfinal, 'filters'=>$filters]);
    }
}
