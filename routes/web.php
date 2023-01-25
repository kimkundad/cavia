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

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'HomeController@index')->name('home');


Route::get('/upgame_Joker', 'HomeController@upgame_Joker')->name('upgame_Joker');
Route::get('/upgame_pg', 'HomeController@upgame_pg')->name('upgame_pg');

Route::get('/upgame_allgame1', 'HomeController@upgame_allgame')->name('upgame_allgame');

Route::group(['middleware' => ['auth' ,'checksinglesession']], function () {

    
    Route::get('/add_to_checkout/{id}', 'HomeController@add_to_checkout')->name('add_to_checkout');

    Route::get('/cart', 'HomeController@cart')->name('cart');
Route::get('/checkout', 'HomeController@checkout')->name('checkout');
Route::get('/payment_success/{id}', 'HomeController@payment_success')->name('payment_success');
Route::get('/history', 'HomeController@history')->name('history');
Route::get('/invoice_detail/{id}', 'HomeController@invoice_detail')->name('invoice_detail');
Route::get('/account', 'HomeController@account')->name('account');

    Route::post('/add_my_order', 'HomeController@add_my_order')->name('add_my_order');
    Route::post('/update_user', 'HomeController@update_user')->name('update_user');

    Route::get('/promotion', 'HomeController@promotion')->name('promotion');
    Route::get('/my_point', 'HomeController@my_point')->name('my_point');
  

Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/term', 'HomeController@term')->name('term');
Route::get('/how_to', 'HomeController@how_to')->name('how_to');

Route::get('/get_modal/{id}', 'HomeController@get_modal')->name('get_modal');

Route::post('/add_session_value', 'HomeController@add_session_value')->name('add_session_value');

Route::get('deleteCart/{id}', 'HomeController@deleteCart');
Route::get('deleteCart2/{id}', 'HomeController@deleteCart2');

});

Route::group(['middleware' => ['UserRole:manager|employee']], function() {
  

    Route::post('/import', 'DashboardController@import')->name('import');

    Route::get('admin/dashboard', 'DashboardController@index');
    Route::resource('admin/product', 'ProductController');
    Route::post('api/product_status', 'ProductController@product_status')->name('product_status');
    Route::get('api/del_product/{id}', 'ProductController@del_product')->name('del_product');
    Route::get('api/del_point_user_2/{id}', 'UserController@del_point_user_2')->name('del_point_user_2');
    

    Route::resource('admin/users', 'UserController');
    Route::get('api/del_users/{id}', 'UserController@del_user')->name('del_user');
    Route::post('admin/add_point_user/{id}', 'UserController@add_point_user')->name('add_point_user');
    Route::get('api/del_point_user/{id}', 'UserController@del_point_user')->name('del_point_user');

 
    Route::get('admin/user_search', 'UserController@user_search');

    Route::resource('admin/slide_show', 'SlideController');
    Route::post('api/slide_status', 'SlideController@slide_status')->name('slide_status');
    Route::get('api/del_slide/{id}', 'SlideController@del_slide')->name('del_slide');

    Route::resource('admin/order', 'OrderController');
    Route::get('api/del_order/{id}', 'OrderController@del_order')->name('del_order');

    Route::get('admin/setting', 'SettingController@setting')->name('setting');
    Route::post('api/post_setting', 'SettingController@post_setting')->name('post_setting');

    Route::get('admin/get_point', 'DashboardController@get_point')->name('get_point');
  
});