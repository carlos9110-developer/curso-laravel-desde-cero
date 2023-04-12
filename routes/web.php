<?php

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

Route::get('/', 'MainController@index')->name('main');



Route::prefix('products')->group(function () {
    
    Route::get('/', 'ProductController@index')->name('products.index');

    Route::get('create', 'ProductController@create')->name('products.create');
    
    Route::post('/','ProductController@store')->name('products.store');

    Route::get('/{product}', 'ProductController@show')->name('products.show');

    Route::get('/{product}/edit', 'ProductController@edit')->name('products.edit');
    
    // con esto le estamos diciento que cuando se llame esta ruta puede ser por el metodo put o patch
    Route::match(['put', 'patch'], '/{product}', 'ProductController@update')->name('products.update');
    
    Route::delete('/{product}', 'ProductController@destroy')->name('products.destroy');
    
});









