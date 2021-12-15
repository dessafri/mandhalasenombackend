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

Route::get('agenda', 'API\agendaController@all');
Route::get('mentor', 'API\mentorController@all');
Route::get('dokumentasi', 'API\fotoController@all');
Route::get('artikel', 'API\artikelcontroller@all');
