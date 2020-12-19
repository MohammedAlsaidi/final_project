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

// Route::get('/home', 'HomeController@index')->name('home');
//--------------------------Student info------------------------------
Route::get('/student', 'StudentController@create')->name('student.create');
Route::post('/std/store','StudentController@store')->name('student.store');
Route::get('/std/show','StudentController@show')->name('student.show');
Route::put('/std/update/{id}','StudentController@update')->name('student.update');
Route::get('/std/edit/{id}', 'StudentController@edit')->name('student.edit');
Route::get('/std/destroy/{id}', 'StudentController@destroy')->name('student.destroy');