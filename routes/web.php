<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TelFinalController;
use App\Http\Controllers\TIGO2021Controller;
use App\Http\Controllers\CableOndaController;

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
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::get('customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::post('customers', [CustomerController::class, 'store'])->name('customers.store');
Route::put('customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');
Route::delete('customers/{customer}', [CustomerController::class, 'destry'])->name('customers.destroy');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    ])->group(function () {
    Route::get('/customers/create',function () {
        return Inertia::render('Customers/Create');
    })->name('customers.create');
});

Route::middleware(
    ['auth:sanctum', 'verified'])->get('/consultacedula', [TelFinalController::class,'Index'])->name('Consultacedula');
Route::middleware(
    ['auth:sanctum', 'verified'])->get('/cableonda', [CableOndaController::class,'Index'])->name('CableOnda');
Route::middleware(
    ['auth:sanctum', 'verified'])->get('/tigo_2021', [TIGO2021Controller::class,'Index'])->name('Tigo');

    