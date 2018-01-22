<?php

Route::group([
    'namespace'  => 'Block',
], function () {

	Route::get('block/get', 'AdminBlockController@getTableData')->name('block.get-list-data');
    
    /*
     * Admin Block Controller
     */
    Route::resource('block', 'AdminBlockController');

    Route::get('block/', 'AdminBlockController@index')->name('block.index');
    Route::get('block/{id}', 'AdminBlockController@blockDetails')->name('block.details');
    
});
