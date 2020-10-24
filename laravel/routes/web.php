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

Route::get('/teste', function(){ return view('teste.index');});

Route::get('/cadastro', function(){ return view('cadastro.index');});
Route::post('/cadastro/cliente', 'App\Http\Controllers\CadastroClienteController@index');
Route::post('/cadastro/cliente/criar', 'App\Http\Controllers\CadastroClienteController@store');
Route::post('/cadastro/profissional', 'App\Http\Controllers\CadastroProfissionalController@index');
Route::post('/cadastro/profissional/criar', 'App\Http\Controllers\CadastroProfissionalController@store');
Route::get('/', function(){ return view('home.index');});
