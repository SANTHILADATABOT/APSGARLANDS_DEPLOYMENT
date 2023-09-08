<?php

use Illuminate\Support\Facades\Route;

Route::get('customerrewardspoints', [
    'as' => 'admin.customerrewardspoints.index',
    'uses' => 'CustomerRewardpointController@index',
    'middleware' => 'can:admin.customerrewardspoints.index',
]);

Route::get('customerrewardspoints/create', [
    'as' => 'admin.customerrewardspoints.create',
    'uses' => 'CustomerRewardpointController@create',
    'middleware' => 'can:admin.customerrewardspoints.create',
]);

Route::post('customerrewardspoints', [
    'as' => 'admin.customerrewardspoints.store',
    'uses' => 'CustomerRewardpointController@store',
    'middleware' => 'can:admin.customerrewardspoints.create',
]);

Route::get('customerrewardspoints/{id}', [
    'as' => 'admin.customerrewardspoints.edit',
    'uses' => 'CustomerRewardpointController@show',
    'middleware' => 'can:admin.customerrewardspoints.edit',
]);

Route::put('customerrewardspoints/{id}', [
    'as' => 'admin.customerrewardspoints.update',
    'uses' => 'CustomerRewardpointController@update',
    'middleware' => 'can:admin.customerrewardspoints.edit',
]);

Route::delete('customerrewardspoints/{ids?}', [
    'as' => 'admin.customerrewardspoints.destroy',
    'uses' => 'CustomerRewardpointController@destroy',
    'middleware' => 'can:admin.customerrewardspoints.destroy',
]);

