<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function(){ return view('index');})->name('pagina_inicial');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/teste/pontuacao', [App\Http\Controllers\TestePontuacaoController::class, 'index'])
->name('teste_pontuacao')
->middleware('auth');

Route::post('/teste/pontuacao', [App\Http\Controllers\TestePontuacaoController::class, 'atualizaPontuacao'])
->name('atualiza_pontuacao')
->middleware('auth');

Route::get('/teste/avaliacao', [App\Http\Controllers\TesteAvaliacaoController::class, 'index'])
->name('teste_avaliacao')
->middleware('auth');

Route::post('/teste/avaliacao', [App\Http\Controllers\TesteAvaliacaoController::class, 'enviar'])->middleware('auth');
