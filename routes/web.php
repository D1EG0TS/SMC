<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');
Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');
Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');
Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');
Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');
use App\Http\Controllers\MedicionController;
    Route::resource('mediciones', MedicionController::class);


    Route::get('/ver-grafica', function () {
        return view('grafica');
    })->name('ver-grafica');
    
    use App\Http\Controllers\MedicionesController;

    Route::get('/mediciones', [MedicionesController::class, 'index'])->name('mediciones.index');
    Route::get('/ver-grafica', [MedicionesController::class, 'grafica'])->name('ver-grafica');

    use App\Http\Controllers\PerfilController;
    Route::get('/perfil', [PerfilController::class, 'index'])->name('show.blade.index');
    Route::get('/perfil', [PerfilController::class, 'perfil'])->name('perfil');
    
    Route::get('/perfil', [PerfilController::class, 'show'])->name('perfil.show');

    Route::put('/perfil', [PerfilController::class, 'update'])->name('perfil.update');


    