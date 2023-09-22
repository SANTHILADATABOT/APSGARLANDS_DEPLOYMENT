<?php

namespace Modules\RewardpointsGift\Providers;

use Modules\Support\Traits\AddsAsset;
use Illuminate\Support\ServiceProvider;
// use Modules\Admin\Ui\Facades\TabManager;

class RewardpointsGiftServiceProvider extends ServiceProvider
{
    use AddsAsset;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->app->singleton(\Illuminate\Database\Eloquent\Factory::class, function () {
            return \Illuminate\Database\Eloquent\Factory::constructWith(
                \Faker\Generator::class,
                base_path('modules/RewardpointsGift/Database/factories')
            );
        });
        
    }
}
