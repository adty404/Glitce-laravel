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

//Detail of destination and also can buy ticket from here
Route::get('/destination/{slug}', 'DestinationController@detail')->name('destination-detail');

Route::get('/about', 'AboutController@index')->name('about');
Route::get('/testimonial', 'TestimonialController@index')->name('testimonial');

//Create Order and Success Order
Route::post('/order', 'OrderController@createOrder')->name('order.create');
Route::get('/order/success/{order_number}', 'OrderController@orderSuccess')->name('order.success');

//Check Order Status
Route::get('/order/check', 'OrderController@index')->name('order.check');
Route::post('order/status/', 'OrderController@orderStatus')->name('order.status');
Route::post('order/status/reset', 'OrderController@resetPaymentSlip')->name('order.status.reset');
Route::post('order/status/payment-slip', 'OrderController@paymentSlip')->name('order.status.payment-slip');

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

    //Order
    Route::get('order/placed', 'Admin\OrderController@orderPlaced')->name('admin.order.placed');
    Route::get('order/payment-slip', 'Admin\OrderController@paymentSlip')->name('admin.order.payment-slip');
    Route::get('order/payment-verified', 'Admin\OrderController@paymentVerified')->name('admin.order.payment-verified');
    Route::get('order/payment-decline', 'Admin\OrderController@paymentDecline')->name('admin.order.payment-decline');
    
    //Payment Slip process
    Route::get('order/payment-slip/{id}', 'Admin\OrderController@approvePaymentSlip')->name('admin.order.payment-slip.approve');
    Route::post('order/payment-slip/decline', 'Admin\OrderController@declinePaymentSlip')->name('admin.order.payment-slip.decline');
});