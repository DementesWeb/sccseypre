<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Dato1;
use App\Models\Dato2;
use App\Models\Dato3;
use App\Models\Dato4;
use App\Models\Dato5;
use App\Models\Dato6;
use App\Models\Dato7;
use App\Models\Dato8;
use App\Models\Dato9;
use App\Models\customer;
use App\Models\dato10;
use App\Models\Dato11;
use App\Models\dato12;
use App\Models\Dato13;
use App\Models\dato14;
use App\Models\dato15;
use App\Models\dato16;
use App\Models\Dato17;
use App\Models\dato18;
use App\Models\Dato19;
use App\Models\dato20;
use App\Models\Dato21;
use App\Models\dato22;
use App\Models\Dato23;
use App\Models\dato24;
use App\Models\Dato25;
use App\Models\dato26;
use App\Models\Dato27;
use App\Models\dato28;
use App\Models\Dato29;
use App\Models\dato30;
use App\Models\Dato31;
use App\Models\dato32;
use App\Models\Dato33;
use App\Models\dato34;
use App\Models\Dato35;
use App\Models\dato36;
use App\Models\Dato37;
use App\Models\Dato38;
use App\Models\Dato39;
use App\Models\Telefono;
use Illuminate\Http\Request;

class BuscarCedulaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        //REQUEST
        $filters = $request->all('search');

        //RESPONDS
        $ceddato1 = Dato1::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $ceddato2 = Dato2::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('cedula', $search);
            })->paginate(10);

        $ceddato3 = Dato3::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $ceddato4 = Dato4::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $ceddato5 = Dato5::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $ceddato6 = Dato6::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $ceddato7 = Dato7::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('cedula', $search);
            })->paginate(10);

        $ceddato8 = Dato8::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $ceddato9 = Dato9::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $ceddato10 = dato10::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                /* $query->where('cedula', 'like', '%' . $search . '%'); */
                $query->where('CARGO', $search);
            })->paginate(10);

        $dato11 = Dato11::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CARGO', $search);
            })->paginate(10);

        $ceddato12 = dato12::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $dato13 = Dato13::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $dato14 = dato14::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $dato15 = dato15::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $dato16 = dato16::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $dato17 = Dato17::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CARGO', $search);
            })->paginate(10);

        $dato18 = dato18::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $dato19 = Dato19::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $dato20 = dato20::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $dato21 = Dato21::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $dato22 = dato22::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $dato23 = Dato23::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $dato24 = dato24::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $dato25 = Dato25::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('PUESTO', $search);
            })->paginate(10);

        $dato26 = dato26::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $dato27 = Dato27::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('NUMERO_DE_CEDULA', $search);
            })->paginate(10);

        $dato28 = dato28::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $dato29 = Dato29::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $dato30 = dato30::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $dato31 = Dato31::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $dato32 = dato32::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $dato33 = Dato33::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $dato34 = dato34::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $dato35 = Dato35::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $dato36 = dato36::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $dato37 = Dato37::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $dato38 = Dato38::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $dato39 = Dato39::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CEDULA', $search);
            })->paginate(10);

        $cedtelefono = Telefono::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('CED', $search);
            })->paginate(10);

        $customer = Customer::latest()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('cedula', $search);
            })->paginate(10);

        //CACHE
        $ceddato1 = cache('cached1', $ceddato1, now()->addWeek());
        $ceddato2 = cache('cached2', $ceddato2, now()->addWeek());
        $ceddato3 = cache('cached3', $ceddato3, now()->addWeek());
        $ceddato4 = cache('cached4', $ceddato4, now()->addWeek());
        $ceddato5 = cache('cached5', $ceddato5, now()->addWeek());
        $ceddato6 = cache('cached6', $ceddato6, now()->addWeek());
        $ceddato7 = cache('cached7', $ceddato7, now()->addWeek());
        $ceddato8 = cache('cached8', $ceddato8, now()->addWeek());
        $ceddato9 = cache('cached9', $ceddato9, now()->addWeek());
        $ceddato10 = cache('cached10', $ceddato10, now()->addWeek());
        $dato11 = cache('cached11', $dato11, now()->addWeek());
        $ceddato12 = cache('cached12', $ceddato12, now()->addWeek());
        $dato13 = cache('cached13', $dato13, now()->addWeek());
        $dato14 = cache('cached14', $dato14, now()->addWeek());
        $dato15 = cache('cached15', $dato15, now()->addWeek());
        $dato16 = cache('cached16', $dato16, now()->addWeek());
        $dato17 = cache('cached17', $dato17, now()->addWeek());
        $dato18 = cache('cached18', $dato18, now()->addWeek());
        $dato19 = cache('cached19', $dato19, now()->addWeek());
        $dato20 = cache('cached20', $dato20, now()->addWeek());
        $dato21 = cache('cached21', $dato21, now()->addWeek());
        $dato22 = cache('cached22', $dato22, now()->addWeek());
        $dato23 = cache('cached23', $dato23, now()->addWeek());
        $dato24 = cache('cached24', $dato24, now()->addWeek());
        $dato25 = cache('cached25', $dato25, now()->addWeek());
        $dato26 = cache('cached26', $dato26, now()->addWeek());
        $dato27 = cache('cached27', $dato27, now()->addWeek());
        $dato28 = cache('cached28', $dato28, now()->addWeek());
        $dato29 = cache('cached29', $dato29, now()->addWeek());
        $dato30 = cache('cached30', $dato30, now()->addWeek());
        $dato31 = cache('cached31', $dato31, now()->addWeek());
        $dato32 = cache('cached32', $dato32, now()->addWeek());
        $dato33 = cache('cached33', $dato33, now()->addWeek());
        $dato34 = cache('cached34', $dato34, now()->addWeek());
        $dato35 = cache('cached35', $dato35, now()->addWeek());
        $dato36 = cache('cached36', $dato36, now()->addWeek());
        $dato37 = cache('cached37', $dato37, now()->addWeek());
        $dato38 = cache('cached38', $dato38, now()->addWeek());
        $dato39 = cache('cached39', $dato39, now()->addWeek());
        $cedtelefono = cache('cachetelefono', $cedtelefono, now()->addWeek());
        $customer = cache('cachecustomer', $customer, now()->addWeek());

        return Inertia::render('BuscarCedula/BuscarCedula', [
            'ceddato1' => $ceddato1,
            'ceddato2' => $ceddato2,
            'ceddato3' => $ceddato3,
            'ceddato4' => $ceddato4,
            'ceddato5' => $ceddato5,
            'ceddato6' => $ceddato6,
            'ceddato7' => $ceddato7,
            'ceddato8' => $ceddato8,
            'ceddato9' => $ceddato9,
            'ceddato10' => $ceddato10,
            'dato11' => $dato11,
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
            'cedtelefono' => $cedtelefono,
            'customer' => $customer,
            'filters' => $filters
        ]);
    }
}
