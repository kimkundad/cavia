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




Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/cart', 'HomeController@cart')->name('cart');
Route::get('/checkout', 'HomeController@checkout')->name('checkout');
Route::get('/payment_success', 'HomeController@payment_success')->name('payment_success');
Route::get('/promotion', 'HomeController@promotion')->name('promotion');
Route::get('/history', 'HomeController@history')->name('history');
Route::get('/invoice_detail', 'HomeController@invoice_detail')->name('invoice_detail');
Route::get('/account', 'HomeController@account')->name('account');

Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/term', 'HomeController@term')->name('term');
Route::get('/how_to', 'HomeController@how_to')->name('how_to');