<?php

namespace App\Http\Controllers;

use App\Models\Dato1;
use App\Models\dato10;
use App\Models\Dato2;
use App\Models\Dato3;
use App\Models\Dato4;
use App\Models\Dato5;
use App\Models\Dato6;
use App\Models\Dato7;
use App\Models\Dato8;
use App\Models\Dato9;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BuscarCedulaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        // Obtener los filtros de la solicitud
        $filters = $request->input('search');

        // Página actual
        $page = $request->query('page', 1);

        // Clave de caché
        $cacheKey = "cachingAllData-$page";

        // Obtener datos de la caché
        $cachedData = cache($cacheKey);

        if ($cachedData && is_array($cachedData)) {
            $cachingtelefonos = collect($cachedData);
        } else {
            $cachingtelefonos = collect();
        }

        // Crear una función anónima para recordar en caché los datos
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato1::query();

            if ($filters) {
                $query->where('CEDULA', 'like', $filters);
            }

            return $query->paginate(
                25,
                ['*'],
                'page',
                request()->query(
                    'page',
                    1
                )
            );
        });

        $ceddato2 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato2::query();

            if ($filters) {
                $query->where('CEDULA', 'like', $filters);
            }

            return $query->paginate(
                25,
                ['*'],
                'page',
                request()->query('page', 1)
            );
        });

        $ceddato3 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato3::query();

            if ($filters) {
                $query->where('CEDULA', 'like', $filters);
            }

            return $query->paginate(
                25,
                ['*'],
                'page',
                request()->query('page', 1)
            );
        });

        $ceddato4 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato4::query();

            if ($filters) {
                $query->where('CEDULA', 'like', $filters);
            }

            return $query->paginate(
                25,
                ['*'],
                'page',
                request()->query('page', 1)
            );
        });

        $ceddato5 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato5::query();

            if ($filters) {
                $query->where('CEDULA', 'like', $filters);
            }

            return $query->paginate(
                25,
                ['*'],
                'page',
                request()->query('page', 1)
            );
        });

        $ceddato6 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato6::query();

            if ($filters) {
                $query->where('CEDULA', 'like', $filters);
            }

            return $query->paginate(
                25,
                ['*'],
                'page',
                request()->query('page', 1)
            );
        });

        $ceddato7 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato7::query();

            if ($filters) {
                $query->where('cedula', 'like', $filters);
            }

            return $query->paginate(
                25,
                ['*'],
                'page',
                request()->query('page', 1)
            );
        });

        $ceddato8 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato8::query();

            if ($filters) {
                $query->where('CEDULA', 'like', $filters);
            }

            return $query->paginate(
                25,
                ['*'],
                'page',
                request()->query('page', 1)
            );
        });

        $ceddato9 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato9::query();

            if ($filters) {
                $query->where('cedula', 'like', $filters);
            }

            return $query->paginate(
                25,
                ['*'],
                'page',
                request()->query('page', 1)
            );
        });

        $ceddato10 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = dato10::query();

            if ($filters) {
                $query->where('cedula', 'like', $filters);
            }

            return $query->paginate(
                25,
                ['*'],
                'page',
                request()->query('page', 1)
            );
        });

        /* $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato11::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });

        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = dato12::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });

        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato13::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });

        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = dato14::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });

        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = dato15::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });

        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = dato16::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });

        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato17::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = dato18::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato19::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = dato20::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato21::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = dato22::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato17::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato17::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato17::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato17::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato17::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato17::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato17::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato17::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato17::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato17::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato17::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato17::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato17::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato17::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato17::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato17::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato17::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato17::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato17::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato17::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato17::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page',
                request()->query('page', 1)
            );
        });
        $ceddato1 = cache()->remember($cacheKey, now()->addWeek(), function () use ($filters) {
            $query = Dato17::query();

            if ($filters) {
                $query->where('CED', 'like', $filters);
            }

            return $query->paginate(25, ['*'], 'page', request()->query('page', 1));
        }); */

        // Fusionar los datos de la caché con los nuevos datos
        $cachingceddato1 = $cachingtelefonos->merge($ceddato1);
        $cachingceddato2 = $cachingtelefonos->merge($ceddato2);
        $cachingceddato3 = $cachingtelefonos->merge($ceddato3);
        $cachingceddato4 = $cachingtelefonos->merge($ceddato4);
        $cachingceddato5 = $cachingtelefonos->merge($ceddato5);
        $cachingceddato6 = $cachingtelefonos->merge($ceddato6);
        $cachingceddato7 = $cachingtelefonos->merge($ceddato7);
        $cachingceddato8 = $cachingtelefonos->merge($ceddato8);
        $cachingceddato9 = $cachingtelefonos->merge($ceddato9);
        $cachingceddato10 = $cachingtelefonos->merge($ceddato10);

        // Guardar en la caché
        cache([$cacheKey => $cachingtelefonos], now()->addWeek());

        // Renderizar la vista usando Inertia
        return Inertia::render('BuscarCedula/BuscarCedula', [
            'ceddato1' => $cachingceddato1,
            'ceddato2' => $cachingceddato2,
            'ceddato3' => $cachingceddato3,
            'ceddato4' => $cachingceddato4,
            'ceddato5' => $cachingceddato5,
            'ceddato6' => $cachingceddato6,
            'ceddato7' => $cachingceddato7,
            'ceddato8' => $cachingceddato8,
            'ceddato9' => $cachingceddato9,
            'ceddato10' => $cachingceddato10,
            /* 'dato11' => $dato11,
            'ceddato12' => $ceddato12,
            'dato13' => $dato13,
            'dato14' => $dato14,
            'dato15' => $dato15,
            'dato16' => $dato16,
            'dato17' => $dato17,
            'dato18' => $dato18,
            'dato19' => $dato19,
            'dato20' => $dato20,
            'dato21' => $dato21,
            'dato22' => $dato22,
            'dato23' => $dato23,
            'dato24' => $dato24,
            'dato25' => $dato25,
            'dato26' => $dato26,
            'dato27' => $dato27,
            'dato28' => $dato28,
            'dato29' => $dato29,
            'dato30' => $dato30,
            'dato31' => $dato31,
            'dato32' => $dato32,
            'dato33' => $dato33,
            'dato34' => $dato34,
            'dato35' => $dato35,
            'dato36' => $dato36,
            'dato37' => $dato37,
            'dato38' => $dato38,
            'dato39' => $dato39,
            'dato40' => $dato40,
            'dato41' => $dato41,
            'dato42' => $dato42,
            'dato43' => $dato43,
            'dato44' => $dato44,
            'dato45' => $dato45,
            'cedtelefono' => $cedtelefono,
            'customer' => $customer,
            'filters' => $filters */
        ]);
    }
}
