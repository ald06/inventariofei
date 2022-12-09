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
    return view('layouts.app');
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

Route::get('/tiposhardware/getdata', 'TiposHardwareController@getData')->name('tiposHardware.getData');
Route::resource('/tiposhardware', 'TiposHardwareController');

Route::get('/responsable/getdata', 'ResponsableController@getData')->name('responsable.getData');
Route::resource('/responsable', 'ResponsableController');

Route::get('/ubicacion/getdata', 'UbicacionController@getData')->name('ubicacion.getData');
Route::resource('/ubicacion', 'UbicacionController');

Route::get('/tiposadquisicion/getdata', 'TiposAdquisicionController@getData')->name('tiposAdquisicion.getData');
Route::resource('/tiposadquisicion', 'TiposAdquisicionController');


/*<<<<<<< HEAD

=======

>>>>>>> 24b97d9 (catalogo de ubicaciones)


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


Route::get('/verInformacion', function () {
    return view('verInformacion');
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
