<?php

use App\Http\Controllers\EventoController;
use App\Http\Controllers\RecintoController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Lobby
|--------------------------------------------------------------------------
*/
Route::view('/', 'index')->name('lobby');


/*
|--------------------------------------------------------------------------
| Eventossss
|--------------------------------------------------------------------------
*/
Route::get('/eventos', [EventoController::class, 'index'])->name('eventos.index');
Route::get('eventos/create', [EventoController::class, 'create'])->name('eventos.create');
Route::post('eventos/store', [EventoController::class, 'store'])->name('eventos.store');
Route::get('eventos/{evento}', [EventoController::class, 'show'])->name('eventos.show');



/*
|--------------------------------------------------------------------------
| Recintos
|--------------------------------------------------------------------------
*/
Route::get('/recintos', [RecintoController::class, 'index'])->name('recinto.index');
Route::get('/recintos/create', [RecintoController::class, 'create'])->name('recintos.create');
Route::post('/recintos/store', [RecintoController::class, 'store'])->name('recintos.store');
Route::get('/recintos/{recinto}', [RecintoController::class, 'show'])->name('recintos.show');



/*
|--------------------------------------------------------------------------
| Reservas
|--------------------------------------------------------------------------
*/

Route::view('/reservas', 'reservas.index')->name('reservas');

