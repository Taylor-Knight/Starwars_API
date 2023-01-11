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
//     return view('starwarsApi');
// });

Route::get('/', 'App\Http\Controllers\StarwarsController@index');
//struggles to get display this as a webpage initially when setting up laravel but were resolved when it was set up correctly
// I had some install not inplace

Route::get('/people', 'App\Http\Controllers\StarwarsController@people'); //these routes are so the user input can be sent to the correct API
Route::get('/films', 'App\Http\Controllers\StarwarsController@films'); 
Route::get('/starships', 'App\Http\Controllers\StarwarsController@starships');
Route::get('/vehicles', 'App\Http\Controllers\StarwarsController@vehicles');
Route::get('/species', 'App\Http\Controllers\StarwarsController@species');
Route::get('/planets', 'App\Http\Controllers\StarwarsController@planets');