<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Application;
use App\Http\Controllers\Dato1Controller;
use App\Http\Controllers\Dato2Controller;
use App\Http\Controllers\Dato3Controller;
use App\Http\Controllers\Dato4Controller;
use App\Http\Controllers\Dato5Controller;
use App\Http\Controllers\Dato6Controller;
use App\Http\Controllers\Dato7Controller;
use App\Http\Controllers\Dato8Controller;
use App\Http\Controllers\Dato9Controller;
use App\Http\Controllers\Dato10Controller;
use App\Http\Controllers\Dato11Controller;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TelefonoController;
use App\Http\Controllers\BuscarCedulaController;
use App\Http\Controllers\BusquedaCamposController;
use App\Http\Controllers\BusquedaMultipleController;
use App\Http\Controllers\SecurityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        /* 'canRegister' => Route::has('register'), */
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('security', [SecurityController::class, 'index'])->name('security.index');
Route::get('security/users', [SecurityController::class, 'index'])->name('security.users');
Route::get('security/create', [SecurityController::class, 'create'])->name('security.create');
Route::get('security/{usuario}/edit', [SecurityController::class, 'edit'])->name('security.edit');
Route::post('security', [SecurityController::class, 'store'])->name('security.store');
Route::put('security/{usuario}', [SecurityController::class, 'update'])->name('security.update');
Route::delete('security/{usuario}', [SecurityController::class, 'destroy'])->name('security.destroy');

Route::get('customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::get('customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::post('customers', [CustomerController::class, 'store'])->name('customers.store');
Route::put('customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');
Route::delete('customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

/* Route::middleware(['auth:sanctum', 'verified'])->get('/register', function () {
    $role = Auth::user()->current_team_id;
    return Inertia::render('Auth/Register');
})->name('register'); */

Route::get('/busquedacampos',[BusquedaCamposController::class,'Index'])->name('busquedacampos');

Route::middleware(['auth:sanctum', 'verified'])->get('/consulta', function () {
    return Inertia::render('Consulta');
})->name('consulta');


Route::get('/telefono', [TelefonoController::class,'Index'])->name('Telefono');
Route::get('/dato1', [Dato1Controller::class,'Index'])->name('Dato1');
Route::get('/dato2', [Dato2Controller::class,'Index'])->name('Dato2');
Route::get('/dato3', [Dato3Controller::class,'Index'])->name('Dato3');
Route::get('/dato4', [Dato4Controller::class,'Index'])->name('Dato4');
Route::get('/dato5', [Dato5Controller::class,'Index'])->name('Dato5');
Route::get('/dato6', [Dato6Controller::class,'Index'])->name('Dato6');
Route::get('/dato7', [Dato7Controller::class,'Index'])->name('Dato7');
Route::get('/dato8', [Dato8Controller::class,'Index'])->name('Dato8');
Route::get('/dato9', [Dato9Controller::class,'Index'])->name('Dato9');
Route::get('/dato10', [Dato10Controller::class,'Index'])->name('Dato10');
Route::get('/dato11', [Dato11Controller::class,'Index'])->name('Dato11');
Route::get('/buscarcedula', [BuscarCedulaController::class,'Index'])->name('BuscarCedula');
Route::get('/BusquedaMultiple', [BusquedaMultipleController::class,'Index'])->name('BusquedaMultiple');

