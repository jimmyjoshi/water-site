<?php

Route::group([
    'namespace'  => 'Product',
], function () {

	Route::get('product/get', 'AdminProductController@getTableData')->name('product.get-list-data');
	Route::get('products/', 'AdminProductController@index')->name('product.get-products');
    
    /*
     * Admin Product Controller
     */
    Route::resource('product', 'AdminProductController');

    Route::get('/', 'AdminProductController@index')->name('product.index');
    
});
