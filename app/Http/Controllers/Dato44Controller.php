<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dato44;
use Inertia\Inertia;

class Dato44Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato44 = Dato44::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('POSICION', 'like', '%' . $search . '%');
                /* $query->where('CEDULA', $search); */
            })->paginate(50);

        $dato44 = cache('cachedb', $dato44, now()->addWeek());

        return Inertia::render('Datos/Dato44', ['dato44' => $dato44, 'filters' => $filters]);
    }
}
