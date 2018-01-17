<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', 'FrontendController@index')->name('index');
Route::any('login-by-admin', 'FrontendController@loginByAdmin')->name('water-login');
Route::any('validate-admin-login', 'FrontendController@validateloginByAdmin')->name('water-login-check');
Route::get('/categories', 'FrontendController@jewelCategories')->name('water-categories');
Route::get('products', 'FrontendController@jewelProducts')->name('water-products');
Route::any('add-to-cart', 'FrontendController@addProductToCart')->name('water-add-to-cart');
Route::get('product-details/{id}', 'FrontendController@productDetails')->name('jewel-products-details');
Route::get('about-us', 'FrontendController@aboutUs')->name('about-us');
Route::get('services', 'FrontendController@waterServices')->name('water-services');
Route::get('contact-us', 'FrontendController@contactOwner')->name('water-contact-us');
Route::get('macros', 'FrontendController@macros')->name('macros');

Route::any('buy-single-product', 'FrontendController@buySingleProduct')->name('water-buy-single-product');

Route::any('remove-product-from-cart', 'FrontendController@removeProductToCart')->name('remove-product-from-cart');

Route::any('create-order', 'FrontendController@createOrder')->name('create-order');



Route::any('my-cart', 'FrontendController@myCart')->name('water-my-cart');

//Route::any('products', 'FrontendController@timePiece')->name('time-piece');

Route::any('time-piece', 'FrontendController@timePiece')->name('time-piece');

Route::any('accessories', 'FrontendController@accessories')->name('accessories');

Route::any('gifts', 'FrontendController@gifts')->name('gifts');

Route::any('client-service', 'FrontendController@clientService')->name('client-service');

Route::any('corporate', 'FrontendController@corporate')->name('corporate');

Route::any('catelogs', 'FrontendController@catelogs')->name('catelogs');

Route::any('legal-terms', 'FrontendController@legalTerms')->name('legal-terms');

Route::any('help', 'FrontendController@helpDesk')->name('help-desk');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        Route::get('cart', 'DashboardController@showCart')->name('show-cart');


        //Route::post('add-product-to-cart', 'DashboardController@addProductToCart')->name('add-product-to-cart');
            
//        Route::post('remove-product-from-cart', 'DashboardController@removeProductToCart')->name('remove-product-from-cart');

        Route::any('create-order', 'DashboardController@createOrder')->name('create-order');

        

        /*
         * User Account Specific
         */
        Route::get('account', 'AccountController@index')->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', 'ProfileController@update')->name('profile.update');
    });
});
