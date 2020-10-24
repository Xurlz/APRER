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

Route::get('/login','App\Http\Controllers\LoginController@index');
Route::post('/login', 'App\Http\Controllers\LoginController@handle');

Route::get('/cadastro', 'App\Http\Controllers\CadastroController@index');
Route::post('/cadastro', 'App\Http\Controllers\CadastroController@store');

Route::get('/', function(){ return view('home.index');});
