<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/horario', [App\Http\Controllers\HorarioController::class, 'index'])->name('horario');

//Route::get('/superusuario', [App\Http\Controllers\AdminController::class, 'index'])->name('superusuario');

Route::get('/configuracion', [App\Http\Controllers\ConfiguracionController::class, 'index'])->name('configuracion');

Route::get('/perfil', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil');

Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');

Route::delete('/admin/certificados/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('certificados.destroy');

Route::post('/admin/certificados/restaurar', [App\Http\Controllers\AdminController::class, 'restaurar'])->name('certificados.restaurar');

// Route::get('login', [App\Http\Controllers\LoginController::class, 'showLoginForm'])->name('login');
// Route::post('login', [App\Http\Controllers\LoginController::class, 'login']);
// Route::get('logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');