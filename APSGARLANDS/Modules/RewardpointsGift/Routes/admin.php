<?php

use Illuminate\Support\Facades\Route;

Route::get('rewardpointsgift', [
    'as' => 'admin.rewardpointsgift.index',
    'uses' => 'RewardpointGiftController@index',
    'middleware' => 'can:admin.rewardpointsgift.index',
]);

Route::get('rewardpointsgift/create', [
    'as' => 'admin.rewardpointsgift.create',
    'uses' => 'RewardpointGiftController@create',
    'middleware' => 'can:admin.rewardpointsgift.create',
]);

Route::post('rewardpointsgift', [
    'as' => 'admin.rewardpointsgift.store',
    'uses' => 'RewardpointGiftController@store',
    'middleware' => 'can:admin.rewardpointsgift.create',
]);

Route::get('rewardpointsgift/{id}', [
    'as' => 'admin.rewardpointsgift.edit',
    'uses' => 'RewardpointGiftController@show',
    'middleware' => 'can:admin.rewardpointsgift.edit',
]);

Route::put('rewardpointsgift/{id}', [
    'as' => 'admin.rewardpointsgift.update',
    'uses' => 'RewardpointGiftController@update',
    'middleware' => 'can:admin.rewardpointsgift.edit',
]);

Route::delete('rewardpointsgift/{ids?}', [
    'as' => 'admin.rewardpointsgift.destroy',
    'uses' => 'RewardpointGiftController@destroy',
    'middleware' => 'can:admin.rewardpointsgift.destroy',
]);

// append

