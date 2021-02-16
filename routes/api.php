<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideojuegoController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UsuarioController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => ['cors']], function(){
    Route::get('/usuario', [UsuarioController::class, 'index']);
    Route::post('/usuario/guardar', [UsuarioController::class, 'store']);
    Route::put('/usuario/actualizar/{id}', [UsuarioController::class, 'update']);
    Route::delete('/usuario/borrar/{id}', [UsuarioController::class, 'destroy']);
    Route::get('/usuario/buscar/{id}', [UsuarioController::class, 'show']);
});