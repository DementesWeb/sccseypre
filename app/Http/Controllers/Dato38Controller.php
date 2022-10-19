<?php

namespace App\Http\Controllers;

use App\Models\Dato38;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato38Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato38 = Dato38::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CARGO', 'like', '%' . $search . '%');
                /* $query->where('CEDULA', $search); */
            })->paginate(50);

        $dato38 = cache('cachedb', $dato38, now()->addWeek());

        return Inertia::render('Datos/Dato38', ['dato38' => $dato38, 'filters' => $filters]);
    }
}
