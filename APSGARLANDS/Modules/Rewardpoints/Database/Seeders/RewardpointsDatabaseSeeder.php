<?php

namespace Modules\Rewardpoints\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Rewardpoints\Entities\Rewardpoints;

class RewardpointsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
        $rew = Rewardpoints::create([  
        'add_days_reward_points_expiry' => 10,
        'add_days_reward_points_assignment'=>0,
        'use_points_per_order'=>0,
        'min_order_cart_value_redemption'=>200,
        'currency_value'=>10,
        'point_value'=>1,
        'redemption_point_value'=>1,
        'redemption_currency_value'=>1,
        'epoint_first_signup_value'=>0,
        // 'epoint_ref_point_value'=>,
        'epoint_forder_point_value'=>100,
        'epoint_freview_point_value'=>100,
        'epoint_fpay_point_value'=>100,
        'epoint_bday_point_value'=>100,
        'apply_notification_message'=>false,
        'enable_apply_points_rem_payment'=>false,
        'apply_payment_noti_message'=>false,
        'bday_noti_mail_message'=> true]);
    }
}
