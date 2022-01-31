<?php

use App\Http\Controllers\API\RegionesController;
use App\Http\Controllers\API\ProvinciasController;
use App\Http\Controllers\API\CiudadesController;
use App\Http\Controllers\API\CallesController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('regiones', [RegionesController::class, 'index']);
Route::get('regiones/{id}', [RegionesController::class, 'show']);

Route::get('provincias', [ProvinciasController::class, 'index']);
Route::get('provincias/{id}', [ProvinciasController::class, 'show']);
Route::get('provincias/regiones/{id}', [ProvinciasController::class, 'provinciaRegion']); //cambiar


Route::get('ciudades', [CiudadesController::class, 'index']);
Route::get('ciudades/{id}', [CiudadesController::class, 'index']);
Route::get('ciudades/provincias/{id}', [CiudadesController::class, 'ciudadProvincia']); //cambiar



Route::get('calles', [CallesController::class, 'index']);
Route::get('calles/{id}', [CallesController::class, 'show']);
Route::post('calles/insert', [CallesController::class, 'store']);
Route::put('calles/{id}', [CallesController::class, 'update']);

Route::get('callesdatos', [CallesController::class, 'getCalle']); //cambiar 
Route::get('callesdatos/{id}', [CallesController::class, 'getCalleParametro']); //cambiar 
Route::delete('calles/datos/{id}', [CallesController::class, 'delete']); //cambiar 
// Route::get('calles/datos', 'App\Http\Controllers\CallesController@getCalle'); //cambiar 