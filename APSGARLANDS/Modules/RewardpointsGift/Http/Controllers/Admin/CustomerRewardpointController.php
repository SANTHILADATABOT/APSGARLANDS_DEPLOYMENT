<?php

namespace Modules\RewardpointsGift\Http\Controllers\Admin;

use Modules\RewardpointsGift\Entities\RewardpointGift;
use Modules\RewardpointsGift\Entities\CustomerRewardPoint;
use Modules\Product\Entities\Product;
use Modules\Product\Filters\ProductFilter;
use Modules\Product\Http\Controllers\ProductSearch;
use Modules\Rewardpoints\Entities\Rewardpoints;
use Carbon\Carbon;
use Modules\Admin\Traits\HasCrudActions;
use DB;


class CustomerRewardpointController
{
    use HasCrudActions;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $model = CustomerRewardPoint::class;
    
    public function index()
    {
        $currentDateTime = Carbon::now();
        $expaired_points_condition = "expairy_date < ".$currentDateTime;
        $in_live_points_condition = "expairy_date >= ".$currentDateTime;

        $customerRewardPoints = $this->model::with('user')
        ->select('customer_id', \DB::raw('SUM(reward_points_earned) as reward_points_earned_total'))
        ->addSelect(\DB::raw('SUM(reward_points_claimed) as reward_points_claimed_total'))
        ->when($expaired_points_condition, function($qry){
            return $qry->addSelect(\DB::raw('SUM(reward_points_claimed) as reward_points_claimed_total'));
        })
        ->when($in_live_points_condition, function($qry){
            return $qry->addSelect(\DB::raw('SUM(reward_points_claimed) as reward_points_claimed_total'));
        })
        ->addSelect(\DB::selectRaw('SUM(CASE WHEN claimed_points IS NULL AND expiary_date <= ? THEN earned_points ELSE 0 END) as expaired_earned_rewardpoints', [$currentDateTime])
        ->selectRaw('SUM(CASE WHEN claimed_points IS NOT NULL AND claimed_points <= ? AND expiary_date > ? THEN claimed_points ELSE 0 END) as expaired_claimed_rewardpoints', [$currentDateTime, $currentDateTime])
        ->selectRaw('expaired_earned_rewardpoints - expaired_claimed_rewardpoints as expaired_points'))
        // ->whereHas('rewardpoints')
        ->whereHas('user')
        ->groupBy('customer_id')
        ->get();
        // ()->rewardpoints();
        dd($customerRewardPoints);
        
    }

    function getExpairedRewardpoints(){
        //$expaired_earned_rewardpoints => User earned rewardpoints, but expaired
        //$expaired_claimed_rewardpoints => User claimed rewardpoints before expairy but on current date,earned rewardpoints expaired
        //expaired_points = $expaired_earned_rewardpoints - $expaired_claimed_rewardpoints


    }

    public function create( $request = null , $reward_type = null)
    {
        
        $customerRewardPoints = new $this->model();
        $getRewardExpiaryTimeSpan = $this->getRewardExpiaryTimeSpan();    
        if( $reward_type =='manualoffer'){
            $customerRewardPoints->customer_id = $request->user_id;
            $customerRewardPoints->reward_type =$reward_type;
            $customerRewardPoints->reward_points_earned = $request->reward_point_value;
            $customerRewardPoints->expairy_date = $getRewardExpiaryTimeSpan;
            $customerRewardPoints->updated_at = Carbon::now();
            $customerRewardPoints->created_at = Carbon::now();
            $customerRewardPoints->save();
        }
    }
    // public function update($request = null, $reward_type = null)
    // {
    //     $customerRewardPoints = $this->model::where('customer_id',$request->user_id)->where("reward_type", $reward_type)->latest()->get();
    //     dd($customerRewardPoints);
    //     $getRewardExpiaryTimeSpan = $this->getRewardExpiaryTimeSpan();

    //     if( $reward_type =='manual'){
    //         // $customerRewardPoints->customer_id = $request->user_id;
    //         $customerRewardPoints->reward_type = $reward_type;
    //         $customerRewardPoints->reward_points_earned = $request->reward_point_value;
    //         $customerRewardPoints->expairy_date = $request->$getRewardExpiaryTimeSpan;
    //         $customerRewardPoints->updated_at = Carbon::now();
    //         $customerRewardPoints->save();
    //     }
    // }

    public function getRewardExpiaryTimeSpan()
    {
        $rewardpoints_setting = Rewardpoints::first();
        $numdays = $rewardpoints_setting->getRewardPointsExpirationDays();
        return Carbon::now()->addDays($numdays->add_days_reward_points_expiry);       
    }
}
