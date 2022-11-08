<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Routing\Route as RoutingRoute;
use Symfony\Component\HttpFoundation\Session\Session;

Route::get('/', function () {
    return view('home');
})->middleware('auth');


Route::get('/login', [SessionController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionController::class, 'store'])
    ->name('login.store');


//Route::post('/login/destroy', [SessionController::class, 'destroy'])
  //  ->name('login.destroy');


Route::get('/register', [RegisterCOntroller::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterCOntroller::class, 'store'])
    ->name('register.store');

Route::get('/logout', [SessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');