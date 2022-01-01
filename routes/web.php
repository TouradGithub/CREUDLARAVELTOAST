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
Route::group(['prefix'  => 'product'], function () {
    Route::get('index', 'ProductController@index')->name('product.index');

    Route::get('create', 'ProductController@create')->name('product.create');
    Route::post('store', 'ProductController@store')->name('product.store');
    Route::post('update{id}', 'ProductController@update')->name('product.update');
    Route::get('edit{id}', 'ProductController@edit')->name('product.edit');
    Route::get('delete{id}', 'ProductController@delete')->name('product.delete');
});
