<?php

use App\Http\Controllers\DonoController;
use App\Http\Controllers\NucleoController;
use Illuminate\Http\Request;
use App\Http\Controllers\InscritoController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('donos')->group(function() {
    Route::get('', [DonoController::class, 'index']);
    Route::get('{dono}', [DonoController::class, 'show']);
    Route::put('{dono}', [DonoController::class, 'update']);
    Route::delete('{dono}', [DonoController::class, 'destroy']);
    Route::post('', [DonoController::class, 'store']);
    Route::post('{dono}/nucleos', [DonoController::class, 'addNucleo']);
});

Route::prefix('nucleos')->group(function() {
    Route::get('', [NucleoController::class, 'index']);
    Route::get('{nucleo}', [NucleoController::class, 'show']);
    Route::put('{nucleo}', [NucleoController::class, 'update']);
    Route::delete('{nucleo}', [NucleoController::class, 'destroy']);
    Route::post('', [NucleoController::class, 'store']);
    Route::post('{nucleo}/inscritos', [NucleoController::class, 'addInscrito']);
    Route::post('{nucleo}/profissionais', [NucleoController::class, 'addProfissional']);

});






