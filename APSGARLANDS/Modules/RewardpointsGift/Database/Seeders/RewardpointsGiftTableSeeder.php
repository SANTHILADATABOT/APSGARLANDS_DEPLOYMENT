<?php

namespace Modules\RewardpointsGift\Database\Seeders;

use Illuminate\Database\Seeder;

use Modules\RewardpointsGift\Entities\RewardpointsGift;

class RewardpointsGiftTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(CustomerRewardPoint::class, 30)->create();
        factory(RewardpointsGift::class, 6)->create();
        // $this->call("OthersTableSeeder");


    }
}
