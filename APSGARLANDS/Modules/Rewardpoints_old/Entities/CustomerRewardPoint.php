<?php

namespace Modules\Rewardpoints\Entities;

use Modules\Support\Money;
use Modules\Cart\Facades\Cart;
use Modules\User\Entities\User;
use Modules\Order\Entities\Order;
use Illuminate\Support\Facades\DB;
use Modules\Support\Eloquent\Model;
use Modules\Rewardpoints\Admin\RewardpointsTable;
use Modules\Product\Entities\Product;
use Modules\Category\Entities\Category;
use Modules\Support\Eloquent\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\User\Entities\Role;

class CustomerRewardPoint extends Model
{
    use Translatable,
    SoftDeletes,
    Concerns\SyncRelations,
    Concerns\RelationList;

    // protected $with = ['translations'];

    // protected $fillable = ['id','user_id','rewardpoints_id','total_rewardpoints_allocated','total_used_points',
    // 'total_unused_points','is_active','deleted_at','created_at','updated_at'];
    
    // rewardpoints_id - earned reward point type 
    //Ex : Manually offered reward - "mr"
    //First login   - "FL"
    //First Order   - "FO"
    //Firsr Payemnt -"FP"
    //Birthday      - "BD"


    protected $fillable = ['id','user_id','rewardpoints_id','total_rewardpoints_allocated','total_used_points',
    'total_unused_points','is_active','deleted_at','created_at','updated_at'];
    
    protected $casts = ['is_active' => 'boolean'];
    

    protected $dates = ['deleted_at','created_at','updated_at'];

    protected $translatedAttributes = ['name'];

    protected static function booted()
    {
        static::saved(function ($rewardpoints) {
            $rewardpoints->saveRelations(request()->all());
        });

        static::addActiveGlobalScope();
    }

    /** 
        * Get the Log of Rewards Gained by  and Rewards Redeemed  by User
        *  @var array
    */
    public function getCustomerRewardsReedemLog(){
        return $result=0;
    }

    /**  
     *  Get the Available of Reward points and equelent Amount per User
    *  @var array
    */
    public function getAvailableCustomerRewardsReedemption(){
        return $result=0;
    }
    /**  
     *  Check if the user claimed 
    *  @var array
    */
    // public function is_customerGainedSignupReward(): bool
    // {
    //     return true;
    // }

    }
