<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ejercicio', function () {
    return view('ejercicio');
})->name('ejercicio');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//paquete de rutas  en url siempre minusculas excepcion del metodo 
Route :: resource("producto",ProductoController::class)->except("show")->middleware("auth");
//esto es para que solo se pueda acceder a las rutas si esta autenticado 




require __DIR__.'/auth.php';
