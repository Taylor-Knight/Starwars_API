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
//struggles to get display this as a webpage initially

Route::get('/people', 'App\Http\Controllers\StarwarsController@people'); //