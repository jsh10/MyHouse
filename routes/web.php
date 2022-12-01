<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductsController;
use Illuminate\Validation\ValidationException;
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
Route::get('/', function(){
    return view('index');
});

Route::get('/tienda', [CartController::class, 'shop'])->name('shop');

Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');

Route::post('/add', [CartController::class, 'add'])->name('cart.store');

Route::post('/update', [CartController::class, 'update'])->name('cart.update');

Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');

Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');

Route::get('/contacto', function(){
    return view('contacto');
});

Route::post('/venta', [CartController::class, 'venta'])->name('venta');

Route::get('/envio1', function(){
    return view('envio1');
});

Route::get('/envio2', function(){
    return view('envio2');
});


//Route::view('dashboard', 'dashboard')->middleware('auth');

Route::get('/login' , function(){return view('login');})->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register' , function(){
    return view('cuenta/registro');
});

Route::get('/pantalla' , function(){
    return view('cuenta/pantalla');
});

Route::post('/reiniciar', [CartController::class, 'reiniciar'])->name('reiniciar');


/* PDF */

Route::get('/pdf', [CartController::class, 'pdf'])->name('pdf');

/* Rutas para CRUD productos*/
Route::get('/dashboard', [ProductsController::class, 'index'])->name('dashboard.index')->middleware('auth');

Route::get('/create', [ProductsController::class, 'create'])->name('dashboard.create')->middleware('auth');
Route::post('/store', [ProductsController::class, 'store'])->name('dashboard.store')->middleware('auth');

Route::get('/edit/{id}', [ProductsController::class, 'edit'])->name('dashboard.edit')->middleware('auth');
Route::put('/update/{id}', [ProductsController::class, 'update'])->name('dashboard.update')->middleware('auth');

Route::get('/show', [ProductsController::class, 'show'])->name('dashboard.show')->middleware('auth');
Route::delete('/destroy/{id}', [ProductsController::class, 'destroy'])->name('dashboard.destroy')->middleware('auth');


/**
 * Filtrado por categoria
*/

Route::get('/tecnologia', [CartController::class, 'tecnologia'])->name('tecnologia');
Route::get('/muebles', [CartController::class, 'muebles'])->name('muebles');
Route::get('/electrodomesticos', [CartController::class, 'electrodomesticos'])->name('electodomesticos');
Route::get('/hogar', [CartController::class, 'hogar'])->name('hogar');
Route::get('/utensilios', [CartController::class, 'utensilios'])->name('utensilios');
Route::get('/artesanal', [CartController::class, 'artesanal'])->name('artesanl');


/**
 * Subir fotos de referencia para los productos
 */
route::get('/upload', function(){
    return view('upload');
})->middleware('auth');

Route::post('/upload', [ProductsController::class, 'upload'])->name('dashboard.upload')->middleware('auth');
