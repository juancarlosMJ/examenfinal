<?php

use App\Models\Inventario;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioController;
use Illuminate\Support\Facades\Auth;


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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
                                                                            //nombre de mi clase  nombre de mi ruta
Route::get('/inventario', [InventarioController::class, 'index'])->name('inventario');
//crear un nuevo  
Route::get('Inventario/create', [InventarioController::class, 'create'])->name('inventario.create');

//eliminar
Route::delete('Inventario/{inventarios}',[InventarioController::class,'destroy'])->name('inventario.destroy');

Route::post('Inventario', [InventarioController::class, 'store'])->name('inventario.store');

Route::get('Inventario/{inventarios}/edit', [InventarioController::class, 'edit'])->name('inventario.edit');

Route::put('Inventario/{inventarios}', [InventarioController::class, 'update'])->name('inventario.update');


