<?php

namespace App\Http\Controllers;

use App\Models\Dato37;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato37Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato37 = Dato37::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'like', '%' . $search . '%');
                /* $query->where('CEDULA', $search); */
            })->paginate(50);

        $dato37 = cache('cachedb', $dato37, now()->addWeek());

        return Inertia::render('Datos/Dato37', ['dato37' => $dato37, 'filters' => $filters]);
    }
}
