<?php

namespace Modules\RewardpointsGift\Http\Controllers\Admin;

use Modules\RewardpointsGift\Entities\RewardpointsGift;
use Modules\Admin\Traits\HasCrudActions;
use Modules\RewardpointGift\Http\Requests\SaveTagRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\User\Entities\User;


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



    // public function index(Request $request)
    // {
    //     $rewardpointsgift = RewardpointsGift::with('user')->get();
        
    //     return view("{$this->viewPath}.index");
    // }


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
        // $entity = User::with('rewardpointsgift')->find($id);
        // $entity = RewardpointsGift::with('user')->find($id);
        $entity = User::with('rewardpointsgift')->find($id);
        // $entity = $entity->user;   returns corresponding user
        // dd($entity);
        if (request()->wantsJson()) {
            return $entity;
        }
        return view("{$this->viewPath}.edit")->with(['rewardpointsGift' => $entity->rewardpointsgift, 'customer'=> $entity]);
    }


//     public function edit($id)
//     {

//         // $data = array_merge([
//         //     'tabs' => TabManager::get($this->getModel()->getTable()),
//         //     $this->getResourceName() => $this->getEntity($id),
//         // ], $this->getFormData('edit', $id));
        
//         $rewardpointsGift = RewardpointsGift::where('reward_points_gifted.id',$id)
//         ->join('users as u', 'u.id','user_id')
//         ->addSelect(['u.first_name','u.last_name','u.email'])
//         ->selectRaw('CONCAT(UCASE(SUBSTRING(first_name, 1, 1)), LCASE(SUBSTRING(first_name, 2))," ",
//         UCASE(SUBSTRING(last_name, 1, 1)), LCASE(SUBSTRING(last_name, 2))) AS customer_name')
//         ->addSelect('reward_points_gifted.*')->get();
// // dd($rewardpointsGift);
//         return view("{$this->viewPath}.edit", compact('rewardpointsGift'));
//     }

    public function update($id)
    {
        
        $entity = $this->getEntity($id);

        $this->disableSearchSyncing();
        dd($entity);
        $entity->update(
            $this->getRequest('update')->all()
        );


        $this->searchable($entity);

        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo($entity)
                ->withSuccess(trans('admin::messages.resource_saved', ['resource' => $this->getLabel()]));
        }

        return redirect()->route("admin.rewardpointsgift.index")
            ->withSuccess(trans('admin::messages.resource_saved', ['resource' => $this->getLabel()]));
    }

    public function updateCustomerRewards($request)
    {
        dd($request);
    }
}
