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

Route::post('nucleos', [NucleoController::class, 'addInscrito']);
Route::post('nucleos', [NucleoController::class, 'store']);


Route::post('inscritos', [InscritoController::class, 'store']);
Route::post('donos', [DonoController::class, 'store']);




