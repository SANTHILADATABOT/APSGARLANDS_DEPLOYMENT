<?php

namespace Modules\Rewardpoints\Http\Controllers\Admin;

use Modules\Rewardpoints\Entities\Rewardpoints;
use Modules\Admin\Traits\HasCrudActions;
use Modules\Rewardpoints\Http\Requests\SaveRewardpointsRequest;

class RewardpointsController
{
    use HasCrudActions;

    /**
     * Model for the resource.
     *
     * @var string
     */
    protected $model = Rewardpoints::class;

    /**
     * Label of the resource.
     *
     * @var string
     */
    protected $label = 'rewardpoints::rewardpoints.rewardpoints';

    /**
     * View path of the resource.
     *
     * @var string
     */
    protected $viewPath = 'rewardpoints::admin.rewardpoints';

    /**
     * Form requests for the resource.
     *
     * @var array|string
     */
    protected $validation = SaveRewardpointsRequest::class;

    public function customerlist()
    {
        $users = new $this->model;
        // dd($users->customers());
        // return view("{$this->viewPath}.index");

    
    }
    

//     public function listcustomersrewardpoints()
//     {
        
//     //     $rewardpoint = $this->model::all();
        
//     // // if (!$rewardpoint) {
//     // //     // Handle the case where the rewardpoint is not found
//     // //     abort(404);
//     // // }

//     // $customers = $rewardpoint->listCustomers();
//     // dd($customers);
//     // return view('rewardpoints.show_customers', compact('customers', 'rewardpoint'));

//     $rewardpoints = Rewardpoint::all();
    
//     // Initialize an empty array to store customer data
//     $customers = [];

//     // Loop through each reward point to fetch its associated customers
//     foreach ($rewardpoints as $rewardpoint) {
//         $customers[] = $rewardpoint->listCustomers();
//     }
//     return view('admin.create', compact('customers'));
// }
    
}
