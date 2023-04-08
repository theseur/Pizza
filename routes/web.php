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

Route::get('main', function () {return view('main');});
Route::get('about_us', function () {return view('about_us');});

//Route::get('pizza_page', function () {return view('pizza_page');});
Route::get('pizza_page', function () {return view('pizza_order');});
Route::post('category_filter', 'App\Http\Controllers\ControllerViews@category_filter');
Route::post('pizza_ordering', 'App\Http\Controllers\DatabaseController@create_pizza_order');

Route::post('pizza_details', function () {return view('pizza_details');});

Route::get('registration', function () {return view('registration');});

Route::get('login', function () {return view('login');});



Route::get('comment_page', function () {return view('comment');});

Route::post('registered', 'App\Http\Controllers\DatabaseController@create_order');



Route::get('exercise01', function () { return '<h1>Hello world!</h1>'; });
Route::get('exercise02', function () { return [1, 2, 3]; });
Route::get('exercise1', function () { return view('view1'); });
Route::get('exercise2p1', 'App\Http\Controllers\Controller2@print1');
Route::get('pizzas', 'App\Http\Controllers\DatabaseController@get_pizzas');