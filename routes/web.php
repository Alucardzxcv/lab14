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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categorias', [App\Http\Controllers\categoriascontroller::class, 'index']);
Route::get('/categorias/create', [App\Http\Controllers\categoriascontroller::class, 'create']);
Route::post('/categorias/insert', [App\Http\Controllers\categoriascontroller::class, 'insert']);
Route::get('/categorias/{id}/edit', [App\Http\Controllers\categoriascontroller::class, 'edit']);
Route::post('/categorias/update/{id}', [App\Http\Controllers\categoriascontroller::class, 'update']);
Route::get('/categorias/{id}/delete', [App\Http\Controllers\categoriascontroller::class, 'delete']);
Route::get('/categorias/prueba', [App\Http\Controllers\categoriascontroller::class, 'prueba']);
Route::get('/categorias/prueba', [App\Http\Controllers\categoriascontroller::class, 'prueba']);
Route::get('/articulos/prueba', [App\Http\Controllers\ArticuloController::class, 'prueba']);
Route::get('/articulos', [App\Http\Controllers\ArticuloController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
