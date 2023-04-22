<?php

namespace App\Http\Controllers;

use App\Models\Dato40;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato40Controller extends Controller
{
    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato40 = Dato40::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', 'like', '%' . $search . '%');
                /* $query->where('CEDULA', $search); */
            })->paginate(50);

        $dato40 = cache('cachedb', $dato40, now()->addWeek());

        return Inertia::render('Datos/Dato40', ['dato40' => $dato40, 'filters' => $filters]);
    }
}
