<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\CableOnda;
use Illuminate\Http\Request;

class CableOndaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $cedulacable = CableOnda::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('cedula', 'like', '%' . $search . '%');
        })->paginate(6);
        return Inertia::render('CableOnda/CableOnda', ['cedulacable'=>$cedulacable, 'filters'=>$filters]);
    }
}
