<?php

use Illuminate\Support\Facades\Route;

Route::get('rewardpointsgift/{rewardpointsgift}/products', 'TagProductController@index')->name('rewardpointsgift.products.index');
