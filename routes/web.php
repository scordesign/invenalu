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

Auth::routes();
Route::resource('bodegas', App\Http\Controllers\BodegaController::class);
Route::resource('grupos', App\Http\Controllers\GrupoController::class);
Route::resource('productos', App\Http\Controllers\ProductoController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
