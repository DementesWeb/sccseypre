<?php

namespace App\Http\Controllers;

use App\Models\Dato45;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato45Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato45 = Dato45::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('POSICION', 'like', '%' . $search . '%');
                /* $query->where('CEDULA', $search); */
            })->paginate(50);

        $dato45 = cache('cachedb', $dato45, now()->addWeek());

        return Inertia::render('Datos/Dato45', ['dato45' => $dato45, 'filters' => $filters]);
    }
}
