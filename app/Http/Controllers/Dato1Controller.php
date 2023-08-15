<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Dato1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class Dato1Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        if (Cache::has('cachedato1')) {
            $ceddato1 = Cache::get('cachedato1');
            Inertia::render('Datos/Dato1', ['ceddato1' => $ceddato1, 'filters' => $filters]);
        } else {
            $ceddato1 = Dato1::latest()
                ->when($filters['search'] ?? null, function ($query, $search) {
                    $query->where('CEDULA', $search);
                })->paginate(50);
            Cache::put('cachedato1', $ceddato1, now()->addWeek());
        }
    }
}
