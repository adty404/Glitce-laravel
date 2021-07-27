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
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('home');
Route::get('/destination', 'DestinationController@index')->name('destination');
Route::get('/destination/detail', 'DestinationController@detail')->name('destination-detail');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/testimonial', 'TestimonialController@index')->name('testimonial');
Route::get('/check-order', 'OrderController@index')->name('check-order');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('home');

    //Template
    Route::resource('user', 'UserController');
    Route::resource('category', 'CategoryController');
    Route::resource('tag', 'TagController');
    Route::resource('item', 'ItemController');
    Route::resource('role', 'RoleController');
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
    Route::get('{page}', ['as' => 'page.index', 'uses' => 'PageController@index']);
});