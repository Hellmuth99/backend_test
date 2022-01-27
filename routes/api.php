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
Route::get('regiones/{region_id}', [RegionesController::class, 'show']);

// Route::get('regiones', 'RegionesController@index');
// Route::get('regiones/{region_id}', 'RegionesController@show');
// Route::post('regiones', 'RegionesController@store');
// Route::put('regiones/{region_id}', 'RegionesController@update');
// Route::delete('regiones/{region_id}', 'RegionesController@delete');
Route::get('provincias', [ProvinciasController::class, 'index']);


Route::get('ciudades', [CiudadesController::class, 'index']);
