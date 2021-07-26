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
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/testimonial', 'TestimonialController@index')->name('testimonial');
Route::get('/check-order', 'OrderController@index')->name('check-order');
