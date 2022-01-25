<?php

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


Route::get('/pacientes', 'App\Http\Controllers\PacienteController@index');
Route::post('/pacientes', 'App\Http\Controllers\PacienteController@store');
Route::put('/pacientes{id}', 'App\Http\Controllers\PacienteController@update');
Route::delete('/pacientes{id}', 'App\Http\Controllers\PacienteController@destroy');

