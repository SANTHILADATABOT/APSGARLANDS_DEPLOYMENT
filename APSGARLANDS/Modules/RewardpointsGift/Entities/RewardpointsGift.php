<?php

namespace Modules\RewardpointsGift\Entities;

use Modules\RewardpointsGift\Admin\RewardpointsGiftTable;
use Modules\RewardpointsGift\Admin\RewardpointsCustomerTable;
use Modules\Support\Eloquent\Model;
use Modules\User\Entities\RoleTranslation;
use Modules\User\Entities\Role;
use Modules\User\Entities\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Ui\AdminTable;
use Modules\Order\Entities\Order;
use Modules\Support\Search\Searchable;


class RewardpointsGift extends Model
{
    use SoftDeletes, Searchable;

    /*
     * Model for the resource.
     *
     * @var string
     */
    protected $table = "reward_points_gifted";

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */

    protected $dates = ['create_at', 'updated_at', 'deleted_at'];

    // protected $appends = ['customer_name'];

    protected $orderBy = ['user_id' => 'desc'];

    protected $fillable = ['id', 'user_id', 'reward_point_value', 'reward_point_remarks'];


    //create a table in view
    public function table()
    {
        $query = User::join('user_roles', 'users.id', '=', 'user_roles.user_id')
            ->join('roles', 'user_roles.role_id', '=', 'roles.id')
            ->join('role_translations', 'roles.id', '=', 'role_translations.role_id')
            ->where('role_translations.name', 'Customer')
            ->leftjoin('orders as ord', 'users.id', '=', 'ord.customer_id')
            ->join('customer_reward_points as rg', 'users.id', '=', 'rg.customer_id')
            ->select(['users.id as id', 'users.first_name', 'users.last_name', 'users.email', 'users.phone'])
            // ->join('reward_points_gifted as rg', 'users.id', '=', 'rg.user_id')
            // ->addSelect(\DB::raw('SUM(CASE WHEN users.id = rg.user_id THEN rg.reward_point_value ELSE 0 END) as reward_point_value'))
            ->addSelect(\DB::raw('SUM(CASE WHEN users.id = rg.customer_id AND rg.reward_type ="manualoffer" THEN rg.reward_points_earned ELSE 0 END) as reward_point_value'))
            ->addSelect(\DB::raw('COUNT(CASE WHEN users.id = ord.customer_id THEN 1 ELSE 0 END) as order_count'))
            ->addSelect(\DB::raw('SUM(CASE WHEN users.id = ord.customer_id THEN ord.total ELSE 0 END) as total_order_amount'))
            ->groupBy('users.id','users.first_name', 'users.last_name', 'users.email', 'users.phone')
            ->newQuery();


        return new RewardpointsGiftTable($query);
    }
    // public function customertable($request)
    // {
    //     $query = RewardpointsGift::where('user_id', $request->route('id'))
    //         ->with('user')
    //         ->newQuery();

    //     return new RewardpointsCustomerTable($query);
    // }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getCustomerNameAttribute()
    {
        return ucfirst($this->customer_first_name) . " " . ucfirst($this->customer_last_name);
    }
}
