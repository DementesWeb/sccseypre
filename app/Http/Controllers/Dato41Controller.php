<?php

namespace App\Http\Controllers;

use App\Models\Dato41;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dato41Controller extends Controller
{
    public function Index(Request $request)
    {
        $filters = $request->all('search');
        $dato41 = Dato41::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('Cedula', 'like', '%' . $search . '%');
                /* $query->where('CEDULA', $search); */
            })->paginate(50);

        $dato41 = cache('cachedb', $dato41, now()->addWeek());

        return Inertia::render('Datos/Dato41', ['dato41' => $dato41, 'filters' => $filters]);
    }
}
