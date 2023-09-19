<?php

namespace Modules\RewardpointsGift\Http\Controllers\Admin;

use Modules\RewardpointsGift\Entities\RewardpointsGift;
use Modules\Admin\Traits\HasCrudActions;
use Modules\RewardpointGift\Http\Requests\SaveTagRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Core\Http\Requests\Request as RequestsRequest;
use Modules\Rewardpoints\Entities\Rewardpoints;
use Modules\RewardpointsGift\Entities\CustomerRewardPoint;
use Modules\User\Entities\User;
use Modules\RewardpointsGift\Http\Controllers\CustomerRewardpointController;


class RewardpointGiftController extends Controller
{
    use HasCrudActions;

    /**
     * Model for the resource.
     *
     * @var string
     */
    protected $model = RewardpointsGift::class;


    /**
     * Label of the resource.
     *
     * @var string
     */
    protected $label = 'rewardpointsgift::rewardpointsgifts.rewardpointsgift';

    /**
     * View path of the resource.
     *
     * @var string
     */
    protected $viewPath = 'rewardpointsgift::admin.rewardpointsgift';


    public function index(Request $request)
    {
        if ($request->has('query')) {
            return $this->getModel()
                ->with['rewardpointsgift']
                ->search($request->get('query'))
                ->query()
                ->limit($request->get('limit', 10))
                ->get();
        }

        if ($request->has('table')) {
            // dd($this->getModel()->user()->isCustomer()->table($request));
            return $this->getModel()->table($request);
            // return $user->table($request);
        }
        return view("{$this->viewPath}.index");
    }


    public function show($id)
    {
        $entity = RewardpointsGift::where('user_id',$id)->get();
        $customer = User::find($id);

        if (request()->wantsJson()) {
            return $entity;
        }

        return view("{$this->viewPath}.show")->with(['rewardpointsgift' => $entity, 'customer'=> $customer]);
    }


    public function edit($id)
    {
        $entity = RewardpointsGift::with('user')->find($id);

        if (request()->wantsJson()) {
            return $entity;
        }

        return view("{$this->viewPath}.edit")->with(['rewardpointsgifted' => $entity]);
    }



    public function update($id)
    {
        $rewardpointsgifted = RewardpointsGift::select('id')->where('id',$id)->first();
        
        $this->disableSearchSyncing();
      
            $entity = $this->getEntity($rewardpointsgifted->id);
            $entity->update(
                $this->getRequest('update')->except(['_token','_method'])
            );
            $entity->user_id = $id;
              
        $CustmerRewardPointsController = new CustomerRewardpointController();
        $CustmerRewardPointsController->create($entity,'manualoffer');
        $this->searchable($entity);

        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo($entity)
                ->withSuccess(trans('admin::messages.resource_saved', ['resource' => $this->getLabel()]));
        }

        return redirect()->route("admin.rewardpointsgift.index")
            ->withSuccess(trans('admin::messages.resource_saved', ['resource' => $this->getLabel()]));
    }

    public function create($id)
    {        
        $user = User::find($id);
        return view("{$this->viewPath}.create")->with(['customer' => $user]);
    }

    public function store(Request $request)
    {
     
        $customer_id = request()->input('customer_id');
        $rewardpointsgift = RewardpointsGift::create([
            'user_id' => $customer_id,
            'reward_point_value' => request()->input('reward_point_value'),
            'reward_point_remarks' => request()->input('reward_point_remarks'),
        ]);
        
        
        
        if ($rewardpointsgift->id) {
            $CustmerRewardPointsController = new CustomerRewardpointController();
            $expiry_date = $CustmerRewardPointsController->getRewardExpiaryTimeSpan();
            
            $customerrewardpoints = CustomerRewardPoint::create([
                'customer_id' => $customer_id,
                'reward_type' => 'manualoffer',
                'reward_points_earned' => request()->input('reward_point_value'),
                'reward_points_claimed' => request()->input('reward_points_claimed'),
                'expiry_date' => $expiry_date,
            ]);
            

            return redirect()->route("admin.rewardpointsgift.edit",['id'=> $customer_id])
                ->withSuccess(trans('admin::messages.resource_saved', ['resource' => $this->getLabel()]));
        }
dd('false');
        return redirect()->route("admin.rewardpointsgift.index")
            ->withSuccess(trans('admin::messages.resource_saved', ['resource' => $this->getLabel()]));
    }
}
