<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Dato1;
use Illuminate\Http\Request;

class Dato1Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $page = $request->query('page', 1);
        $filters = $request->input('search');

        $cacheKey = "cachetelefono-$page";
        $cachedData = cache($cacheKey);

        if ($cachedData && is_array($cachedData)) {
            $cachingtelefonos = collect($cachedData);
        } else {
            $cachingtelefonos = collect();
        }

        $query = Dato1::query();

        if ($filters) {
            $query->where('CEDULA', 'like', $filters);
        }

        $perPage = 25;
        $newCachingtelefonos = $query->paginate($perPage, ['*'], 'page', $page);

        $cachingtelefonos = $cachingtelefonos->merge($newCachingtelefonos);

        cache([$cacheKey => $cachingtelefonos], now()->addWeek());

        return Inertia::render('Telefono/Telefono', ['cedtelefono' => $cachingtelefonos, 'filters' => $filters]);
    }
}
