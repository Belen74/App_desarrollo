<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesionalController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\TurnoController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas Profesional

Route::get('profesionales/index_profesionales', [App\Http\Controllers\ProfesionalController::class, 'index'])->name('index_profesionales');
Route::post('Profesionales/index_profesionales', [App\Http\Controllers\ProfesionalController::class, 'store'])->name('index_profesionales.store');
Route::get('profesionales/{id}/edit', [ProfesionalController::class, 'edit'])->name('profesionales.edit');
Route::put('profesionales/{id}', [ProfesionalController::class, 'update'])->name('profesionales.update');
Route::delete('profesionales/{id}', [ProfesionalController::class, 'destroy'])->name('profesionales.delete');

//Rutas clientes

Route::get('clientes/indexclientes', [App\Http\Controllers\ClientesController::class, 'index'])->name('indexclientes');
Route::post('clientes/indexclientes', [App\Http\Controllers\ClientesController::class, 'store'])->name('indexclientes.store');
Route::get('clientes/{id}/edit', [ClientesController::class, 'edit'])->name('clientes.edit');
Route::put('clientes/{id}', [ClientesController::class, 'update'])->name('clientes.update');
Route::delete('clientes/{id}', [ClientesController::class, 'destroy'])->name('clientes.delete');

//Rutas telefonos 

Route::get('telefonos/indextelefonos', [App\Http\Controllers\TelefonoController::class, 'index'])->name('indextelefonos');
Route::post('telefonos/indextelefonos', [App\Http\Controllers\TelefonoController::class, 'store'])->name('indextelefonos.store');
Route::get('telefonos/{id}/edit', [TelefonoController::class, 'edit'])->name('telefonos.edit');
Route::put('telefonos/{id}', [TelefonoController::class, 'update'])->name('telefonos.update');
Route::delete('telefonos/{id}', [TelefonoController::class, 'destroy'])->name('telefonos.delete');


Route::get('turnos/indexturnos', [App\Http\Controllers\TurnoController::class, 'index'])->name('indexturnos');
Route::post('turnos/indexturnos', [App\Http\Controllers\TurnoController::class, 'store'])->name('indexturnos.store');
Route::get('turnos/{id}/edit', [TurnoController::class, 'edit'])->name('turnos.edit');
Route::put('turnos/{id}', [TurnoController::class, 'update'])->name('turnos.update');
Route::delete('turnos/{id}', [TurnoController::class, 'destroy'])->name('turnos.delete');


Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

