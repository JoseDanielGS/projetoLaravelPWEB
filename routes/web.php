<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListarFilmes;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/filmes', [ListarFilmes::class,'index']);
Route::get('/filmes/adicionar', [ListarFilmes::class,'create']);
Route::post('/filmes/salvar', [ListarFilmes::class,'store']);
Route::get('/filmes/edit', [ListarFilmes::class,'update']);
Route::post('/filmes/update', [ListarFilmes::class,'edit']);
Route::get('/filmes/destroy', [ListarFilmes::class,'destroy']);