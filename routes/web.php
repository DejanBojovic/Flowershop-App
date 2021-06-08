<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LikeController;


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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('homepage');

Route::get('/about', function() {
    return view('pages/about');
})->name('about');

Route::get('/contact', function() {
    return view('pages/contact');
})->name('contact');

// messages
Route::post('/contact', 'App\Http\Controllers\MessageController@addMessage');

Route::get('/updateMessage/{id}', 'App\Http\Controllers\MessageController@updateMessage')->name('updateMessage');
Route::get('/updateMessages', 'App\Http\Controllers\MessageController@updateMessages')->name('updateMessages');
Route::get('/deleteMessage/{id}', 'App\Http\Controllers\MessageController@deleteMessage')->name('deleteMessage');

Route::get('/store', 'App\Http\Controllers\StoreController@index')->name('store');

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');

// edit user
Route::get('/addUser', 'App\Http\Controllers\UserController@newUser')->name('newUser');
Route::post('/addUser', 'App\Http\Controllers\UserController@addUser');

Route::get('/editUser/{id}', 'App\Http\Controllers\UserController@editUser')->name('editUser');
Route::post('/editUser/{id}', 'App\Http\Controllers\UserController@updateUser');
Route::get('/deleteUser/{id}', 'App\Http\Controllers\UserController@deleteUser')->name('deleteUser');

// edit product
Route::get('/product/{id}', 'App\Http\Controllers\ProductController@index')->name('product');
Route::get('/editProduct/{id}', 'App\Http\Controllers\ProductController@editProduct')->name('editProduct');
Route::post('/editProduct/{id}', 'App\Http\Controllers\ProductController@updateProduct');
Route::get('/deleteProduct/{id}', 'App\Http\Controllers\ProductController@deleteProduct')->name('deleteProduct');

// new product
Route::get('/addProduct', 'App\Http\Controllers\ProductController@newProduct')->name('newProduct');
Route::post('/addProduct', 'App\Http\Controllers\ProductController@addProduct');

// comments
Route::post('/addComment', 'App\Http\Controllers\CommentController@addComment')->name('addComment');
Route::get('/deleteComment/{id}', 'App\Http\Controllers\CommentController@deleteComment')->name('deleteComment');
Route::get('/editComment/{id}', 'App\Http\Controllers\CommentController@editComment')->name('editComment');
Route::post('/editComment/{id}', 'App\Http\Controllers\CommentController@updateComment')->name('updateComment');

// likes
Route::post('/addLike', 'App\Http\Controllers\LikeController@addLike')->name('addLike');
Route::get('/deleteLike/{id}', 'App\Http\Controllers\LikeController@deleteLike')->name('deleteLike');

// orders
Route::post('/addOrder', 'App\Http\Controllers\OrderController@addOrder')->name('addOrder');
Route::get('/updateOrders', 'App\Http\Controllers\OrderController@updateOrders')->name('updateOrders');
Route::get('/updateOrder/{id}', 'App\Http\Controllers\OrderController@updateOrder')->name('updateOrder');
Route::get('/deleteOrder/{id}', 'App\Http\Controllers\OrderController@deleteOrder')->name('deleteOrder');


Route::get('/user', 'App\Http\Controllers\UserController@index')->name('user');

Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login');

Route::post('/login', 'App\Http\Controllers\LoginController@loginUser');

Route::post('/logout', 'App\Http\Controllers\LogoutController@logout')->name('logout');

Route::get('/register', 'App\Http\Controllers\RegisterController@index')->name('register');

Route::post('/register', 'App\Http\Controllers\RegisterController@registerUser');