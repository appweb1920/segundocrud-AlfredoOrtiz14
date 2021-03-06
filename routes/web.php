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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'PiezasController@index');
Route::post('/nuevaPieza', 'PiezasController@store');
Route::get('/editaPieza/{id}', 'PiezasController@show');
Route::post('/edicionPieza', 'PiezasController@actualiza');
Route::get('/borraPieza/{id}', 'PiezasController@destroy');