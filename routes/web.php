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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create', 'HomeController@create')->name('create');
Route::post('/create', 'HomeController@postCreate')->name('post-create');
Route::get('/edit/{id}', 'HomeController@edit')->name('edit');
Route::post('/edit', 'HomeController@postEdit')->name('post-edit');
Route::get('/delete/{id}', 'HomeController@delete')->name('delete');
