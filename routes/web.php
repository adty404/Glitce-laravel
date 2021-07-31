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
Route::get('/destination-front', 'DestinationController@index')->name('destination');
Route::get('/destination/{slug}', 'DestinationController@detail')->name('destination-detail');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/testimonial', 'TestimonialController@index')->name('testimonial');
Route::get('/check-order', 'OrderController@index')->name('check-order');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    //Dashboard
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');

    //Ticket
    Route::resource('ticket', 'Admin\TicketController');

    //Payment
    Route::resource('payment', 'Admin\PaymentController');

    //Status
    Route::resource('status', 'Admin\StatusController');

    //Destination
    Route::resource('destination', 'Admin\DestinationController');
});