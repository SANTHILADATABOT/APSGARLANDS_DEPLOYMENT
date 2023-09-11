@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('rewardpointsgift::customerrewardpoints.customerrewardpoints'))

    <li class="active">{{ trans('rewardpointsgift::customerrewardpoints.customerrewardpoints') }}</li>
@endcomponent

@component('admin::components.page.index_table')
    @slot('resource', 'customerrewardpoints')
    @slot('name', trans('rewardpointsgift::customerrewardpoints.customerrewardpoint'))

    @component('admin::components.table')
        @slot('thead')
            <tr>
                <th>{{ trans('admin::admin.table.id') }}</th>
                <th>{{ trans('rewardpointsgift::customerrewardpoints.table.reward_type') }}</th>
                <th>{{ trans('rewardpointsgift::customerrewardpoints.table.earned_reward_points') }}</th>
                <th>{{ trans('rewardpointsgift::customerrewardpoints.table.claimed_reward_points') }}</th>
                <th>{{ trans('rewardpointsgift::customerrewardpoints.table.expiry_date') }}</th>
                <th>{{ trans('rewardpointsgift::customerrewardpoints.table.created_at') }}</th>
            </tr>
        @endslot
    @endcomponent
@endcomponent
        @foreach ($customerrewardpoint as $row)
        <tr>
            <td>{{ }}</td>
        </tr>    
        @endforeach

