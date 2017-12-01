<?php

Route::group([
    'namespace'  => 'Product',
], function () {

	Route::get('product/get', 'AdminProductController@getTableData')->name('product.get-list-data');
    
    /*
     * Admin Product Controller
     */
    Route::resource('products', 'AdminProductController');

    Route::get('products', 'AdminProductController@index')->name('product.index');
    
});
