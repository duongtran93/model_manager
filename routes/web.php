<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ModelController@index')->name('model.index');
Route::get('{id}/description', 'ModelController@desc')->name('model.desc');

Route::prefix('model')->group(function () {
    Route::get('manager', 'ModelController@manager')->name('model.manager');
    Route::get('create', 'ModelController@create')->name('model.create');
    Route::post('create', 'ModelController@store')->name('model.store');
    Route::get('{id}/delete', 'ModelController@delete')->name('model.delete');
    Route::get('{id}/edit', 'ModelController@edit')->name('model.edit');
    Route::post('{id}/edit', 'ModelController@update')->name('model.update');
    Route::get('search', 'ModelController@search')->name('model.search');
});

Route::get('addToLikes/{id}', 'ModelController@addToLikes')->name('addToLikes');


