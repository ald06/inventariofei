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

// Route::get('/', function () {
//     return view('layouts.app');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//rutas de bienes
Route::get('/bien/getdata', 'BienController@getData')->name('bien.getData');
Route::resource('/bien', 'BienController');

//rutas de bienes
Route::get('/hardware/getdata', 'HardwareController@getData')->name('hardware.getData');
Route::resource('/hardware', 'HardwareController');

//rutas de bienes
Route::get('/software/getdata', 'SoftwareController@getData')->name('software.getData');
Route::resource('/software', 'SoftwareController');

Route::get('/tiposhardware/getdata', 'TiposHardwareController@getData')->name('tiposHardware.getData');
Route::resource('/tiposhardware', 'TiposHardwareController');

Route::get('/responsable/getdata', 'ResponsableController@getData')->name('responsable.getData');
Route::resource('/responsable', 'ResponsableController');

Route::get('/salones/getdata', 'SalonesController@getData')->name('salones.getData');
Route::resource('/salones', 'SalonesController');

Route::get('/ubicacion/getdata', 'UbicacionController@getData')->name('ubicacion.getData');
Route::resource('/ubicacion', 'UbicacionController');

Route::get('/tiposadquisicion/getdata', 'TiposAdquisicionController@getData')->name('tiposAdquisicion.getData');
Route::resource('/tiposadquisicion', 'TiposAdquisicionController');

Route::get('/users/getdata', 'UsersController@getData')->name('register.getData');
Route::resource('/users', 'UsersController');


