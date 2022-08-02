<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequisicoesControllerAPI;
use App\Http\Controllers\MateriaisControllerAPI;
use App\Http\Controllers\FornecedoresControllerAPI;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::post('/forgetPassword', [AuthController::class, 'forgetPassword']);

Route::middleware('auth:sanctum')->get('/currentUser', function (Request $request) {
    return $request->user();
});

Route::apiResource('/requisicoes', RequisicoesControllerAPI::class);
Route::apiResource('/materiais', MateriaisControllerAPI::class);
Route::apiResource('/fornecedores', FornecedoresControllerAPI::class);
