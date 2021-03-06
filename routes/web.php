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

Route::get('/', 'indexController@index')->name('dashboard');

Auth::routes();

Route::resource('agenda', 'agendaController');
Route::resource('mentor', 'mentorController');
Route::resource('dokumentasi', 'fotoController');
Route::resource('artikel', 'artikelController');
Route::get('logout', function () {
    Auth::logout();
    return redirect()->route('/');
});
