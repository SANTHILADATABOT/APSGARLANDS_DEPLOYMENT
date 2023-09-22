<?php

namespace Modules\RewardpointsGift\Database\factories;

use Modules\Rewardpoints\Entities\CustomerRewardPoint;
use Modules\RewardpointsGift\Entities;
use Modules\User\Entities\User;
use Modules\Rewardpoints\Entities\Rewardpoints;
use Illuminate\Support\Arr;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


// $type = ['birthday', 'firstsignup', 'firstorder', 'firstpayment', 'firstreview', 'manualoffer'];
// $factory->define(CustomerRewardPoint::class, function ($faker, $type) {
//     return [
//         'customer_id' => User::whereHas('user_roles',function($query){
//             $query->where('role_id', '!=', 1); // Assuming role ID 1 represents the admin role
//         }),
//         'reward_type' => Arr::random($type),
//         'reward_points_earned' => floor($faker->numberBetween(100, 5000)) / 10,
//         'claimed_reward_points' => $faker->boolean(20) ? ($faker->numberBetween(1, 50)) : null,
//         'expiry_date' => (Carbon::now()->addDays(Rewardpoints::first()->add_days_reward_points_expiry))
//     ];
// });

$factory->define(RewardpointsGift::class, function ($faker) {
    return [
        'user_id'  => User::with('user_roles')->where('roles.id', '!=', 1),
         'reward_point_value'=>floor($faker->numberBetween(100, 5000)) / 10,
         'reward_point_remarks'=> $faker->sentence,
         'customer_reward_id'=> CustomerRewardPoint::all()->random()->id,
        //  'customer_reward_id'=> function () {
        //     return factory(CustomerRewardPoint::class)->create()->id;
        // },
    ];
});
