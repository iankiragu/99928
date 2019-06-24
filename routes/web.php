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

Route::view('/', 'IanK.home');
Route::get('student', 'StudentController@create');
Route::get('fees', 'FeesController@create');
Route::post('student','StudentController@store');
Route::post('fees','FeesController@store');

Route::get('studentRecord', 'StudentController@show');
Route::get('FeesPaid', 'FeesController@show');
Route::post('particularstudent', 'FeesController@particularStudent');
