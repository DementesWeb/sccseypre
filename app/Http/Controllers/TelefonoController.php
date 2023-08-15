<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Telefono;
use Illuminate\Http\Request;
/* use Illuminate\Support\Facades\Cache; */

class TelefonoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /* public function Index(Request $request)
    {
        $page = $request->has('page') ? $request->query('page') : 1;
        $filters = $request->all('search');
        if (cache('cachetelefonos')) {
            $cachetelefonos = cache('cachetelefonos');
        } else {
            if ($filters['search']) {
                $cachetelefonos = Telefono::latest()
                    ->when($filters['search'], function ($query, $search) {
                        $query->whereIn('CED', $search);
                    });
            } else {
                $cachetelefonos = Telefono::all();
            }
            cache("cachetelefonos-" . $page, $cachetelefonos, now()->addWeek());
        }
        return Inertia::render('Telefono/Telefono', ['cedtelefono' => $cachetelefonos, 'filters' => $filters]);
    } */

    public function Index(Request $request)
    {
        $page = $request->query('page', 1);
        $filters = $request->input('search');
        if ($filters === null) {
            $cacheKey = "cachetelefonos-$page";
        } else {
            cache()->clear();
            $cacheKey = "cachetelefono";
        }
        $cachedData = cache($cacheKey);

        if ($cachedData) {
            return Inertia::render('Telefono/Telefono', ['cedtelefono' => $cachedData, 'filters' => $filters]);
        }

        $query = Telefono::query();

        if ($filters) {
            $query->where('CED', 'like', '%' . $filters . '%');
        }
        $perPage = 25;
        $cachingtelefonos = $query->paginate($perPage, ['*'], 'page', $page);
        cache([$cacheKey => $cachingtelefonos], now()->addHour());
        return Inertia::render('Telefono/Telefono', ['cedtelefono' => $cachingtelefonos, 'filters' => $filters]);
    }

    /* public function index(Request $request)
    {
        $page = $request->query('page', 1);
        $filters = $request->input('search');
        $cacheKey = "my-cache-key-$page";

        $cachedData = cache($cacheKey);
        if ($cachedData) {
            return $cachedData;
        }

        $query = MyModel::query();
        // Apply filters, sorting, or other conditions to the query
        if ($filters) {
            $query->where('column', 'value');
        }

        $perPage = 10; // Number of items per page
        $paginatedData = $query->paginate($perPage, ['*'], 'page', $page);

        cache([$cacheKey => $paginatedData], now()->addHour());

        return $paginatedData;
    } */

    /* public function Index(Request $request)
    {
        $filters = $request->all('search');

        $cacheKey = 'cachetelefonos';
        $cachetelefonos = cache($cacheKey);
        $lapso = now()->addWeek();

        $page = $request->has('page') ? $request->query('page') : 1;

        if (!$cachetelefonos) {
            $cachetelefonos = Cache::remember('cachetelefonos.' . $page, $lapso, function () use ($filters) {
                return $this->getFilteredTelefonos($filters);
            });
        }

        return Inertia::render('Telefono/Telefono', [
            'cedtelefono' => $cachetelefonos,
            'filters' => $filters,
        ]);
    }

    private function getFilteredTelefonos($filters)
    {
        return Telefono::all()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->whereIn('CED', $search);
            });
    } */

    /* public function Index(Request $request)
    {
        $filters = $request->input('search');

        $cacheKey = 'cachetelefonos';
        $cachedData = Cache::get($cacheKey);

        if (!$cachedData) {
            $cachetelefonos = Cache::remember($cacheKey, now()->addWeek(), function () use ($filters) {
                return $this->getFilteredTelefonos($filters);
            });
        } else {
            $cachetelefonos = collect(json_decode($cachedData, true));
        }

        $filteredData = $cachetelefonos->filter(function ($item) use ($filters) {
            return strpos($item['CED'], $filters) !== false;
        });

        return Inertia::render('Telefono/Telefono', [
            'cedtelefono' => $filteredData,
            'filters' => $filters,
        ]);
    }

    private function getFilteredTelefonos($filters)
    {
        return Telefono::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->whereIn('CED', $search);
            })
            ->get()
            ->toArray();
    } */


    /* public function Index(Request $request)
    {
        $filters = $request->input('search');
        $cacheKey = 'cachetelefonos';
        $cachetelefonos = cache($cacheKey);

        if (!$cachetelefonos) {
            $cachetelefonos = $this->loadCacheFromModel();
        }
        if ($filters['search']) {
            $filteredData = $this->searchInCache($cachetelefonos, $filters);
        }

        return Inertia::render('Telefono/Telefono', [
            'cedtelefono' => $filteredData,
            'filters' => $filters,
        ]);
    }

    private function loadCacheFromModel()
    {
        $cacheKey = 'cachetelefonos';
        $telefonos = Telefono::all();
        $cachetelefonos = cache([$cacheKey => $telefonos], now()->addWeek());
        return $cachetelefonos;
    }

    private function searchInCache($cachetelefonos, $filters)
    {
        $searchValue = $filters['search'] ?? null;

        if ($searchValue) {
            return $cachetelefonos->filter(function ($item) use ($searchValue) {
                return strpos($item['CED'], $searchValue) !== false;
            });
        }

        return $cachetelefonos;
    } */
}
