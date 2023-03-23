<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('public/login');
});


Route::get('/cardapio', [PublicController::class, 'cardapio']);

Route::get('/landing', [PublicController::class, 'landing']);

Route::get('/signup', [PublicController::class, 'signup']);

Route::post('/save', [PublicController::class, 'save']);


Route::get('/home', function() {
    return view('home');
});

// Lista de alunos
Route::resource('/cliente', ClienteController::class);

