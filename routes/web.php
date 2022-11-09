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

//rutas de bienes
Route::get('/hardware/getdata', 'HardwareController@getData')->name('hardware.getData');
Route::resource('/hardware', 'HardwareController');

//rutas de bienes
Route::get('/software/getdata', 'SoftwareController@getData')->name('software.getData');
Route::resource('/software', 'SoftwareController');




//rutas de prueba
Route::get('/registrarequipo', function () {
    return view('equiposComputo.create');
});

Route::get('/registrarsoftware', function () {
    return view('software.create');
});

Route::get('/registrarmonitor', function () {
    return view('monitor.create');
});

Route::get('/registrarproyector', function () {
    return view('proyector.create');
});

Route::get('/registrarswitch', function () {
    return view('switch.create');
});

Route::get('/verequipo', function () {
    return view('equiposComputo.show');
});

Route::get('/versoftware', function () {
    return view('software.show');
});

Route::get('/vermonitor', function () {
    return view('monitor.show');
});

Route::get('/verproyector', function () {
    return view('proyector.show');
});

Route::get('/verswitch', function () {
    return view('switch.show');
});

Route::get('/layout', function () {
    return view('layouts.app');
});


Route::get('/verInformacion', function () {
    return view('verInformacion');
});
