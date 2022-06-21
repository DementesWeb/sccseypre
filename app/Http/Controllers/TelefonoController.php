<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Telefono;
use Illuminate\Http\Request;

class TelefonoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $cedtelefono = Telefono::latest()
            ->when($filters['search'] ?? null, function($query, $search){
            $query->where('CED',$search);
        })->paginate(6);
        return Inertia::render('Telefono/Telefono', ['cedtelefono'=>$cedtelefono, 'filters'=>$filters]);
    }
}
