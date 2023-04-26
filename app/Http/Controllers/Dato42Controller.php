<?php

namespace App\Http\Controllers;

use App\Models\Dato42;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato42Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato42 = Dato42::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'like', '%' . $search . '%');
                /* $query->where('CEDULA', $search); */
            })->paginate(50);

        $dato42 = cache('cachedb', $dato42, now()->addWeek());

        return Inertia::render('Datos/Dato42', ['dato42' => $dato42, 'filters' => $filters]);
    }
}
