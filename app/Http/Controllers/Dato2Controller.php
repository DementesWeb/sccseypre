<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Dato2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class Dato2Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        if (Cache::get('cachedato2')) {
            $ceddato2 = Cache::get('cachedato2');
            return Inertia::render('Datos/Dato2', ['cachedato2' => $ceddato2, 'filters' => $filters]);
        } else {
            $ceddato2 = Dato2::latest()
                ->when($filters['search'] ?? null, function ($query, $search) {
                    $query->where('CEDULA', $search);
                })->paginate(50);
            Cache::put('cachedato2', $ceddato2, now()->addWeek());
        }
    }
}
