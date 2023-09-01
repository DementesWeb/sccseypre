<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Telefono;
use Illuminate\Http\Request;

class TelefonoController extends Controller
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

        $query = Telefono::query();

        if ($filters) {
            $query->where('CED', 'like', $filters);
        }

        $perPage = 25;
        $newCachingtelefonos = $query->paginate($perPage, ['*'], 'page', $page);

        $cachingtelefonos = $cachingtelefonos->merge($newCachingtelefonos);

        cache([$cacheKey => $cachingtelefonos->toArray()], now()->addWeek());

        return Inertia::render('Telefono/Telefono', ['cedtelefono' => $cachingtelefonos, 'filters' => json_encode($filters)]);
    }

    /* public function Index(Request $request)
    {
        $page = $request->query('page', 1);
        $filters = $request->input('search');
        $perPage = 25;

        $cacheKey = "cachetelefono-$page";
        $cachedData = cache($cacheKey);

        if ($cachedData && is_array($cachedData)) {
            $cachedTelefonos = collect($cachedData);
        } else {
            $cachedTelefonos = collect();
        }

        if ($cachedTelefonos->isEmpty()) {
            $query = Telefono::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            $newTelefonos = $query->paginate($perPage, ['*'], 'page', $page);

            $cachedTelefonos = $cachedTelefonos->merge($newTelefonos);

            cache([$cacheKey => $cachedTelefonos->toArray()], now()->addWeek());
        }

        return Inertia::render('Telefono/Telefono', ['cedtelefono' => $cachedTelefonos, 'filters' => json_encode($filters)]);
    } */

    /* private function cachingkey($key, $page){
    switch ($key) {
            case "cachetelefonos-$page":
                $cachedData = cache($key);
                break;
            case "cachetelefonos":
                $cachedData =
            }
        }

        private function cachingdata($cachingtelefonos){

        }

    private function cachingfilter($filters){

    } */
}
