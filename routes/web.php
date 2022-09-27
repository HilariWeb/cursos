<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscripcionController;

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
    return view('index');
});

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//habilita todas las rutas para la inscripcion
//Route::resource('inscripcion',\App\Http\Controllers\InscripcionController::class);

//Route::get('re/report', 'UsersController@report');

Route::get('/inscripcion/registro',[InscripcionController::class,'create']);

Route::post('/inscripcion/registro',[InscripcionController::class,'store']);

Route::get('/inscripcion/success', [App\Http\Controllers\InscripcionController::class, 'success']);

//Route::get('/inscripcion/success', function () { return view('inscripcion.success'); });
