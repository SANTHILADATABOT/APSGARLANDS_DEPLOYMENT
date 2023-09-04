<?php

use Illuminate\Support\Facades\Route;

Route::get('rewardpoints', [
    'as' => 'admin.rewardpoints.index',
    'uses' => 'RewardpointsController@index',
    'middleware' => 'can:admin.rewardpoints.index',
]);

Route::get('rewardpoints/create', [
    'as' => 'admin.rewardpoints.create',
    'uses' => 'RewardpointsController@create',
    'middleware' => 'can:admin.rewardpoints.create',
]);
// Route::get('rewardpoints/create', [
//     'as' => 'admin.rewardpoints.customerlist',
//     'uses' => 'RewardpointsController@customerlist',
//     'middleware' => 'can:admin.rewardpoints.create',
// ]);

Route::post('rewardpoints', [
    'as' => 'admin.rewardpoints.store',
    'uses' => 'RewardpointsController@store',
    'middleware' => 'can:admin.rewardpoints.create',
]);

Route::get('rewardpoints/{id}/edit', [
    'as' => 'admin.rewardpoints.edit',
    'uses' => 'RewardpointsController@edit',
    'middleware' => 'can:admin.rewardpoints.edit',
]);

Route::put('rewardpoints/{id}', [
    'as' => 'admin.rewardpoints.update',
    'uses' => 'RewardpointsController@update',
    'middleware' => 'can:admin.rewardpoints.edit',
]);

Route::delete('rewardpoints/{ids?}', [
    'as' => 'admin.rewardpoints.destroy',
    'uses' => 'RewardpointsController@destroy',
    'middleware' => 'can:admin.rewardpoints.destroy',
]);
