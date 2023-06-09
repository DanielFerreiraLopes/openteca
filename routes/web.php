<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LivroController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UsuarioController::class, 'homeView']);

Route::get('/Usuario/login', [UsuarioController::class, 'loginView']);

Route::get('/Usuario/cadastro', [UsuarioController::class, 'cadastroView']);

Route::get('/Usuario/minhaconta', [UsuarioController::class, 'minhacontaView']);


Route::get('/Livros/livros', [LivroController::class, 'livrosView']);

Route::get('/Livros/meuslivros', [LivroController::class, 'meuslivrosView']);

Route::get('/Livros/resultado', [LivroController::class, 'resultadoView']);


