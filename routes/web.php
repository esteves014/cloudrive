<?php

use App\Http\Controllers\LoginUserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'site.index')->name('site.index');

Route::view('/login', 'usuario.login')->name('usuario.login');
Route::post('/usuario/auth', [LoginUserController::class, 'auth'])->name('usuario.auth');

Route::view('/register', 'usuario.register')->name('usuario.register');