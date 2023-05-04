<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PostController;

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

//base_url -- localhost/pizza
Route::get('/', function () {
    return view('welcome');
});

//base_url -- localhost/pizza/login
Route::get('/login', function () {
    return view('public.login');
});

//base_url -- localhost/pizza/landing
//Route::get('/landing', function () {
//    return view('public.landing');
//});
Route::get('/landing', [PublicController::class, 'landing']);

//localhost/pizza/base-template
Route::get('/template', function () {
    return view('common.basic-template');
});

//localhost/pizza/cardapio
Route::get('/cardapio', [PublicController::class, 'cardapio']);

//localhost/pizza/signup
Route::get('/signup', [PublicController::class, 'signup']);

//localhost/pizza/save
Route::post('/save', [PublicController::class, 'save']);

//localhost/pizza/atv1                       //metodo
Route::get('/atv1', [PublicController::class, 'atv1']);

//localhost/pizza/aluno                            
//Route::resource('/aluno', [AlunoController::class], 'aluno');

//localhost/pizza/cliente                            
Route::get('/cliente/display', [ClienteController::class, 'display']);
Route::resource('cliente', ClienteController::class);//Metodos padrao vão por ultimo

//crud de alunos

Route::get('/post', [PostController::class, 'lista']);
