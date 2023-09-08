<?php

namespace Modules\RewardpointsGift\Entities;

use Modules\RewardpointsGift\Admin\RewardpointsGiftTable;
use Modules\Support\Eloquent\Model;
use Modules\User\Entities\RoleTranslation;
use Modules\User\Entities\Role;
use Modules\User\Entities\User;
use Illuminate\Database\Eloquent\SoftDeletes;
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

    protected $fillable = ['id','user_id','reward_point_value','reward_point_remarks'];
    
    
    //create a table in view
    public function table()
    {   
        $query = User::join('user_roles', 'users.id', '=', 'user_roles.user_id')
        ->join('roles', 'user_roles.role_id', '=', 'roles.id')
        ->join('role_translations', 'roles.id', '=', 'role_translations.role_id')
        ->where('role_translations.name', 'Customer')
        ->select(['users.id as id','users.first_name','users.last_name','users.email','users.phone'])->with('rewardpointsgift')
        ->newQuery();

        // $query = User::select(['id','first_name','last_name','email','phone'])->hasRoleName('customer')->with('rewardpointsgift')->newQuery();
        return new RewardpointsGiftTable($query);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function getCustomerNameAttribute()
    {
        return ucfirst($this->customer_first_name)." ".ucfirst($this->customer_last_name);
    }
}
