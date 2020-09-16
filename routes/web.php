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
    return view('home');
});
Route::prefix('students')->group(function () {
    Route::get('/','StudentController@index')->name('students.index');
    Route::get('/create','StudentController@create')->name('students.create');
    Route::post('/create','StudentController@store')->name('students.store');
    Route::get('/{id}/edit','StudentController@edit')->name('students.edit');
    Route::post('/{id}/edit','StudentController@update')->name('students.update');
    Route::get('/{id}/delete','StudentController@delete')->name('students.delete');
});
Route::prefix('github')->group(function () {
    Route::prefix('users')->group(function () {
        Route::get('/','Api\GitController@index')->name('github.users.index');
        Route::get('/search','Api\GitController@search')->name('github.users.search');
        Route::get('/{name}','Api\GitController@getUser')->name('github.users.detail');
    });
});
