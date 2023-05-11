<?php

namespace App\Http\Controllers;

use App\Models\Dato43;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato43Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato43 = Dato43::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CIP_PROPIETARIO', 'like', '%' . $search . '%');
                /* $query->where('CEDULA', $search); */
            })->paginate(50);

        $dato43 = cache('cachedb', $dato43, now()->addWeek());

        return Inertia::render('Datos/Dato43', ['dato43' => $dato43, 'filters' => $filters]);
    }
}
