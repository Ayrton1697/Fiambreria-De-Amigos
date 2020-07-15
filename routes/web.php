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
//     return view('welcome');
// });
Route::get('/', 'ProductController@getProducts' )->name('index');
Route::get('/picadas', 'ProductController@getPicadas' )->name('picadas');
Route::get('/productos', 'ProductController@getProductos' )->name('productos');
Route::get('/agregar-al-carrito/{id}','ProductController@addToCart')->name('product.addtoCart');
Route::get('/reducir-del-carrito/{id}','ProductController@reduceOne')->name('product.reduceCart');
Route::get('/borrar-del-carrito/{id}','ProductController@delete')->name('product.deleteCart');
Route::get('/carrito','ProductController@cart')->name('cart');
Route::get('quienes-somos', function(){
    return view('quienes-somos'); })->name('quienes-somos');
    Route::get('contacto', function(){
        return view('contacto'); })->name('contacto');
    
// Route::get('/carrito', function(){
//     return view('carrito');
// });

// Route::get('/index', function(){
//     return view('index');
// });

// Route::get('/picadas', function(){
//     return view('picadas');
// });