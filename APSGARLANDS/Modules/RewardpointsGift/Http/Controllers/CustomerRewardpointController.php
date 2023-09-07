<?php

namespace Modules\RewardpointsGift\Http\Controllers;

use Modules\RewardpointsGift\Entities\RewardpointGift;
use Modules\RewardpointsGift\Entities\CustomerRewardPoint;
use Modules\Product\Entities\Product;
use Modules\Product\Filters\ProductFilter;
use Modules\Product\Http\Controllers\ProductSearch;
use Modules\Rewardpoints\Entities\Rewardpoints;
use Carbon\Carbon;

class CustomerRewardpointController
{
    use ProductSearch;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $model = CustomerRewardPoint::class;

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

    public function create( $request = null , $reward_type = null)
    {
        $customerRewardPoints = new $this->model();
        $getRewardExpiaryTimeSpan = $this->getRewardExpiaryTimeSpan();
        // dd($getRewardExpiaryTimeSpan);
        if( $reward_type =='manual'){
            $customerRewardPoints->customer_id = $request->user_id;
            $customerRewardPoints->reward_type = $reward_type;
            $customerRewardPoints->reward_points_earned = $request->reward_point_value;
            $customerRewardPoints->expairy_date = $request->user_id;

        }
    }
    public function update($request = null , $reward_type = null)
    {
        $customerRewardPoints = new $this->model();
        $getRewardExpiaryTimeSpan = $this->getRewardExpiaryTimeSpan();
        // dd($getRewardExpiaryTimeSpan);
        if( $reward_type =='manual'){
            $customerRewardPoints->customer_id = $request->user_id;
            $customerRewardPoints->reward_type = $reward_type;
            $customerRewardPoints->reward_points_earned = $request->reward_point_value;
            $customerRewardPoints->expairy_date = $request->user_id;

        }
    }


    public function getRewardExpiaryTimeSpan()
    {
        $rewardpoints_setting = Rewardpoints::first();
        $numdays = $rewardpoints_setting->getRewardPointsExpirationDays();
        return Carbon::now()->addDays($numdays->add_days_reward_points_expiry);       
    }
}
