<?php

Route::group([
    'namespace'  => 'Order',
], function () {

	Route::get('order/get', 'AdminOrderController@getTableData')->name('order.get-list-data');
    
    /*
     * Admin Product Controller
     */
    Route::resource('order', 'AdminOrderController');

    Route::get('/', 'AdminOrderController@index')->name('order.index');
    Route::get('/{id}', 'AdminOrderController@orderDetails')->name('order.details');
    
});
