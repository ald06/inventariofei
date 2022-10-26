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

Route::get('/', function () {
    return view('welcome');
});

//rutas de bienes
Route::get('/bien/getdata', 'BienController@getData')->name('bien.getData');
Route::resource('/bien', 'BienController');

//rutas de prueba
Route::get('/registrarequipo', function () {
    return view('equiposComputo.create');
});

Route::get('/registrarsoftware', function () {
    return view('software.create');
});

Route::get('/layout', function () {
    return view('layouts.app');
});

Route::get('/verInformacion', function () {
    return view('verInformacion');
});
