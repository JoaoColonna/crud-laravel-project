<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\CLienteController;


Route::get('/', function () {
    return view('welcome');
});

Route::get("/mensagem/{mensagem}", [MensagemController::class, 'mostrarMensagem']);
Route::resources([
    'clientes' => ClienteController::class,
]);
Route::get('clientes/delete/{id}', [ClienteController::class, 'delete']);

Route::resources([ 
    'times' => TimeController::class,
]);

Route::get('/times/{id}/edit', [TimeController::class, 'edit'])->name('times.edit');
Route::post('/times/{id}/update', [TimeController::class, 'update'])->name('times.update');
Route::get('/times/{id}/delete', [TimeController::class, 'delete'])->name('times.delete');
Route::delete('/times/{id}/destroy', [TimeController::class, 'destroy'])->name('times.destroy');

// Route::post('time/create/{id}', [TimeController::class, 'store']);
    
// Route::get('clientes/delete/{id}', [ClienteController::class, 'delete']);