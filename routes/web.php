<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProductoController::class, 'index'])->name('producto.index');

Route::get('/producto/agregar', [ProductoController::class, 'create'])->name('producto.create');
Route::post('/producto/agregar', [ProductoController::class, 'store'])->name('producto.store');
Route::delete('/producto/eliminar/{producto}', [ProductoController::class, 'destroy'])->name('producto.destroy');
Route::get('/producto/editar/{producto}', [ProductoController::class, 'edit'])->name('producto.edit');
Route::put('/producto/editar/{post}', [ProductoController::class, 'update'])->name('producto.update');

Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');
Route::get('/categoria/agregar', [CategoriaController::class, 'create'])->name('categoria.create');
Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.store');
Route::delete('/categoria/eliminar/{categoria}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');
Route::get('/categoria/editar/{categoria}', [CategoriaController::class, 'edit'])->name('categoria.edit');
Route::put('/categoria/editar/{id}', [CategoriaController::class, 'update'])->name('categoria.update');
