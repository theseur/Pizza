<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;

use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/register', [RegisteredUserController::class, 'create'])
 ->middleware('guest')
 ->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])
 ->middleware('guest');
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
 ->middleware('guest')
 ->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])
 ->middleware('guest')
 ->name('login');


Route::get('', function () {return view('main');});
Route::get('main', function () {return view('main');});
Route::get('about_us', function () {return view('about_us');});
Route::get('pictures', function () {return view('pictures_about_pizzas');});

//Route::get('pizza_page', function () {return view('pizza_page');});
Route::get('pizza_page', function () {return view('pizza_order');});
Route::post('category_filter', 'App\Http\Controllers\ControllerViews@category_filter');
Route::post('pizza_ordering', 'App\Http\Controllers\DatabaseController@create_pizza_order');


Route::get('comment_to_pizza', 'App\Http\Controllers\CommentController@comment_to_pizza');
Route::get('save_experience', 'App\Http\Controllers\DatabaseController@save_the_comment')->name('save_experience');
//Route::get('pizza_details', function () {return view('pizza_details');});

Route::get('registration', function () {return view('registration');});

Route::get('login', function () {return view('login');});



Route::get('comment_page', function () {return view('comment');});

Route::post('registered', 'App\Http\Controllers\DatabaseController@create_order');



Route::get('exercise01', function () { return '<h1>Hello world!</h1>'; });
Route::get('exercise02', function () { return [1, 2, 3]; });
Route::get('exercise1', function () { return view('view1'); });
Route::get('exercise2p1', 'App\Http\Controllers\Controller2@print1');
Route::get('pizzas', 'App\Http\Controllers\DatabaseController@get_pizzas')->name('pizzas');
Route::get('editpizza/{pizzaid}','App\Http\Controllers\DatabaseController@edit_pizzas')->name('editpizza');
Route::post('modifypizza/{pizzaid}','App\Http\Controllers\DatabaseController@modify_pizzas')->name('modifypizza');
Route::post('deletepizza/{pizzaid}','App\Http\Controllers\DatabaseController@delete_pizzas')->name('deletepizza');
Route::get('createpizza','App\Http\Controllers\DatabaseController@create_pizza')->name('createpizza');
Route::post('insertpizza/','App\Http\Controllers\DatabaseController@insert_pizza')->name('insertpizza');
Route::post('createuser/','App\Http\Controllers\DatabaseController@createuser')->name('createuser');
//Route::post('userlogin/','App\Http\Controllers\DatabaseController@userlogin')->name('userlogin');
Route::get('categories', 'App\Http\Controllers\DatabaseController@get_categories')->name('categories');
Route::get('editcategories/{pizzaid}','App\Http\Controllers\DatabaseController@edit_categories')->name('editcategories');
Route::post('modifycategories/{pizzaid}','App\Http\Controllers\DatabaseController@modify_categories')->name('modifycategories');
Route::post('deletecategories/{pizzaid}','App\Http\Controllers\DatabaseController@delete_categories')->name('deletecategories');
Route::get('createcategory','App\Http\Controllers\DatabaseController@create_categories')->name('createcategory');
Route::post('insertcategories/','App\Http\Controllers\DatabaseController@insert_categories')->name('insertcategories');


Route::get('failedlogin', 'App\Http\Controllers\DatabaseController@failedlogin')->name('failedlogin');
Route::get('users', 'App\Http\Controllers\DatabaseController@get_users')->name('users');
Route::get('editusers/{pizzaid}','App\Http\Controllers\DatabaseController@edit_users')->name('editusers');
Route::post('modifyusers/{pizzaid}','App\Http\Controllers\DatabaseController@modify_users')->name('modifyusers');
Route::post('deleteusers/{pizzaid}','App\Http\Controllers\DatabaseController@delete_users')->name('deleteusers');
Route::get('createrealuser','App\Http\Controllers\DatabaseController@create_realuser')->name('createrealuser');
Route::post('insertusers/','App\Http\Controllers\DatabaseController@insert_users')->name('insertusers');
Route::get('adminfrontpage','App\Http\Controllers\DatabaseController@adminfrontpage')->name('adminfrontpager');
Route::get('orders', 'App\Http\Controllers\DatabaseController@get_orders')->name('orders');
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');
 Route::get('userfrontpage','App\Http\Controllers\DatabaseController@userfrontpage')->name('userfrontpage');
 Route::get('editcomments/{pizzaid}','App\Http\Controllers\DatabaseController@edit_comments')->name('editcomments');
Route::post('modifycomments/{pizzaid}','App\Http\Controllers\DatabaseController@modify_comments')->name('modifycomments');
Route::post('deletecomments/{pizzaid}','App\Http\Controllers\DatabaseController@delete_comments')->name('deletecomments');
Route::post('insertcomments/','App\Http\Controllers\DatabaseController@insert_comments')->name('insertcomments');
Route::get('createcomments','App\Http\Controllers\DatabaseController@create_comments')->name('createcomments');
Route::get('comments', 'App\Http\Controllers\DatabaseController@get_comments')->name('comments');
