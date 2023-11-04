<?php

Route::group(
    [
        'prefix' => 'backend/ordercrud/orders',

        'middleware' => ['web', 'has.backend.access'],

        'namespace' => 'Backend',
],
function () {
    /**
     * Get Assets
     */
    Route::get('/assets', 'OrdersController@getAssets')
        ->name('vh.backend.ordercrud.orders.assets');
    /**
     * Get List
     */
    Route::get('/', 'OrdersController@getList')
        ->name('vh.backend.ordercrud.orders.list');
    /**
     * Update List
     */
    Route::match(['put', 'patch'], '/', 'OrdersController@updateList')
        ->name('vh.backend.ordercrud.orders.list.update');
    /**
     * Delete List
     */
    Route::delete('/', 'OrdersController@deleteList')
        ->name('vh.backend.ordercrud.orders.list.delete');


    Route::put('/update-status','OrdersController@updateOrderStatus')
        ->name('vh.backend.ordercrud.orders.list.status');

    Route::put('/bulk-change-status','OrdersController@bulkChangeStatus')
        ->name('vh.backend.ordercrud.orders.bulk-change-status');
    /**
     * Fill Form Inputs
     */
    Route::any('/fill', 'OrdersController@fillItem')
        ->name('vh.backend.ordercrud.orders.fill');

    /**
     * Create Item
     */
    Route::post('/', 'OrdersController@createItem')
        ->name('vh.backend.ordercrud.orders.create');
    /**
     * Get Item
     */
    Route::get('/{id}', 'OrdersController@getItem')
        ->name('vh.backend.ordercrud.orders.read');
    /**
     * Update Item
     */
    Route::match(['put', 'patch'], '/{id}', 'OrdersController@updateItem')
        ->name('vh.backend.ordercrud.orders.update');
    /**
     * Delete Item
     */
    Route::delete('/{id}', 'OrdersController@deleteItem')
        ->name('vh.backend.ordercrud.orders.delete');

    /**
     * List Actions
     */
    Route::any('/action/{action}', 'OrdersController@listAction')
        ->name('vh.backend.ordercrud.orders.list.actions');

    /**
     * Item actions
     */
    Route::any('/{id}/action/{action}', 'OrdersController@itemAction')
        ->name('vh.backend.ordercrud.orders.item.action');

    //---------------------------------------------------------
//    Route::get('/{id}/update-status', 'OrdersController@updateOrderStatus')
//        ->name('vh.backend.ordercrud.orders.item.status');
//    Route::put('/{id}/update-status/{status}', 'OrdersController@updateOrderStatus')
//        ->name('vh.backend.ordercrud.orders.item.status');

//    Route::get('/update-status/{id}', 'OrdersController@updateOrderStatus')
//        ->name('vh.backend.ordercrud.orders.item.status');

});
