<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Auth::routes();
Route::resource('bodegas', App\Http\Controllers\BodegaController::class);
Route::resource('grupos', App\Http\Controllers\GrupoController::class);
Route::resource('codigos', App\Http\Controllers\CodigoController::class);
Route::resource('unidads', App\Http\Controllers\UnidadController::class);
Route::resource('ubicacione', App\Http\Controllers\UbicacioneController::class);
Route::resource('productos', App\Http\Controllers\ProductoController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
