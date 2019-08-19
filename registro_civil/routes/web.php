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

// Route::get('/', function () {
//     return view('pages.principal');
// });
Route::get('/','PrincipalController@index')->name('principal');
Route::get('/show/{id}','PrincipalController@show')->name('principal.show');
Route::get('/create','PrincipalController@create')->name('principal.create');
Route::post('/store','PrincipalController@store')->name('principal.store');
Route::get('/edit/{id}','PrincipalController@edit')->name('principal.edit');
Route::post('/update/{id}','PrincipalController@update')->name('principal.update');
Route::get('/destroy/{id}','PrincipalController@destroy')->name('principal.destroy');
