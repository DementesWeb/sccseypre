<?php

namespace App\Http\Controllers;

use App\Models\Dato39;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato39Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato39 = Dato39::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'like', '%' . $search . '%');
                /* $query->where('CEDULA', $search); */
            })->paginate(50);

        $dato39 = cache('cachedb', $dato39, now()->addWeek());

        return Inertia::render('Datos/Dato39', ['dato39' => $dato39, 'filters' => $filters]);
    }
}
