<?php

Route::group([
    'namespace'  => 'Product',
], function () {

	Route::get('product/get', 'AdminProductController@getTableData')->name('product.get-list-data');
    
    /*
     * Admin Product Controller
     */
    Route::resource('product', 'AdminProductController');

    Route::get('/', 'AdminProductController@index')->name('product.index');
    
});
