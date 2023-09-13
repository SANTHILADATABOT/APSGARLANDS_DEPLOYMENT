@extends('admin::layout')

@component('admin::components.page.header_customer_reward')
    @slot('title', trans('rewardpointsgift::rewardpointsgifts.rewardpointsgifts'))
    {{-- @slot('customername', $customer->full_name) --}}
    <li class="pointer"><a
            href="{{ route('admin.rewardpointsgift.index') }}">{{ trans('rewardpointsgift::rewardpointsgifts.title') }}</a>
    </li>
    <li class="active">{{ trans('rewardpointsgift::rewardpointsgifts.rewardpointsgifts') }}</li>
@endcomponent

@component('admin::components.page.header')
    @slot('title', trans('rewardpointsgift::rewardpointsgifts.rewardpointsgifts'))
@endcomponent

@component('admin::components.page.index_table')

    @slot('resource', 'rewardpointsgift')
    @slot('name', trans('rewardpointsgift::rewardpointsgifts.rewardpointsgift'))

    @component('admin::components.table')
        @slot('thead')
            <tr>
                <th class="text-center">{{ trans('admin::admin.table.id') }}</th>
                <th class="text-center">{{ trans('rewardpointsgift::rewardpointsgifts.table.created_at') }}</th>
                <th class="text-center">{{ trans('rewardpointsgift::rewardpointsgifts.table.reward_point_value') }}</th>
                <th class="text-center">{{ trans('rewardpointsgift::rewardpointsgifts.table.reward_point_remarks') }}</th>
                <th class="text-center">{{ trans('rewardpointsgift::rewardpointsgifts.table.updated_at') }}</th>
            </tr>
        @endslot
        @php
            $i = 1;
        @endphp
        @foreach ($rewardpointsgift as $row)
            <tr class="customerrewardpoint" data-id={{ $row->id }}>
                <td class="text-center">{{ $i++ }}</td>
                <td class="text-center">{{ date_format($row->created_at, 'Y-m-d') }}</td>
                <td class="text-center">{{ $row->reward_point_value ?? '-' }}</td>
                <td class="text-center">{{ $row->reward_point_remarks ?? '-' }}</td>
                <td class="text-center">{{ $row->updated_at ? date_format($row->updated_at, 'Y-m-d') : '-' }}</td>
            </tr>
        @endforeach
    @endcomponent
   
@endcomponent


@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const customerRewardPoints = document.querySelectorAll('.customerrewardpoint');

            customerRewardPoints.forEach(function(element) {
                element.addEventListener('click', function() {
                    const id = element.getAttribute('data-id');
                    let routeUrl = '{{ route("admin.rewardpointsgift.customer", ":id") }}';
                    routeUrl = routeUrl.replace(':id', id);
                    window.location.href = routeUrl;
                });
            });
        });
    </script>
@endpush