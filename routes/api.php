<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api',], function () 
{
    Route::post('login', 'UsersController@login')->name('api.login');
    Route::post('register', 'UsersController@register')->name('api.register');
    Route::post('register-guest', 'UsersController@registerAsGuest')->name('api.register-as-guest');
    Route::post('forgotpassword', 'UsersController@forgotPassword')->name('api.forgotPassword');
    /*Route::post('verifyotp', 'UsersController@verifyOtp')->name('api.verifyotp');

    Route::post('resendotp', 'UsersController@resendOtp')->name('api.resendotp');
    Route::post('forgotpassword', 'UsersController@forgotPassword')->name('api.forgotPassword');
    Route::post('specializations', 'SpecializationController@specializationList')->name('api.specializationList');
    Route::post('removeotp', 'UsersController@removeOtp')->name('api.removeotp');
    // send next appointment notification
    Route::post('sendnext', 'PatientsController@sendNextAppoint')->name('api.sendnext');*/
});

Route::group(['namespace' => 'Api', 'middleware' => 'jwt.customauth'], function () 
{
    Route::get('events', 'APIEventsController@index')->name('events.index');
    Route::post('events/create', 'APIEventsController@create')->name('events.create');
    Route::post('events/edit', 'APIEventsController@edit')->name('events.edit');
    Route::post('events/delete', 'APIEventsController@delete')->name('events.delete');

    Route::get('categories', 'APICategoryController@index')->name('api-category.index');
    Route::get('categories/featured', 'APICategoryController@featured')->name('api-category.featured');
    Route::any('products-by-category', 'APICategoryController@productsByCategory')->name('api-category.products-by-category');
    Route::get('products', 'APIProductController@index')->name('api-product.index');

    Route::get('products/get-cart', 'APIProductController@getCart')->name('api-product.get-cart');    
    Route::post('products/add-to-cart', 'APIProductController@addToCart')->name('api-product.add-to-cart');    
    Route::post('products/remove-product-from-cart', 'APIProductController@removeProductFromCart')->name('api-product.remove-product-from-cart');    

    Route::get('products/wishlist-count', 'APIProductController@getWishListCount')->name('api-product.get-wish-list-count');    
    Route::any('orders/create', 'APIOrderController@create')->name('api-order.create');    
});