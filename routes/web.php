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
Route::get('exercise01', function () { return '<h1>Hello world!</h1>'; });
Route::get('exercise02', function () { return [1, 2, 3]; });
Route::get('exercise1', function () { return view('view1'); });
Route::get('exercise2p1', 'App\Http\Controllers\Controller2@print1');
Route::get('pizzas', 'App\Http\Controllers\DatabaseController@get_pizzas');