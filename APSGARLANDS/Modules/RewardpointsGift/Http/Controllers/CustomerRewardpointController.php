<?php

namespace Modules\RewardpointsGift\Http\Controllers;

use Modules\RewardpointGift\Entities\RewardpointGift;
use Modules\Product\Entities\Product;
use Modules\Product\Filters\ProductFilter;
use Modules\Product\Http\Controllers\ProductSearch;

class CustomerRewardpointGiftController
{
    use ProductSearch;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug, Product $model, ProductFilter $productFilter)
    {
        request()->merge(['rewardpointsgift' => $slug]);

        if (request()->expectsJson()) {
            return $this->searchProducts($model, $productFilter);
        }

        return view('public.products.index', [
            'rewardpointsgiftName' => RewardpointGift::findBySlug($slug)->name,
        ]);
    }
}
