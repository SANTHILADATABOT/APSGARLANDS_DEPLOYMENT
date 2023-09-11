@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('rewardpointsgift::rewardpointsgifts.rewardpointsgift'))

    <li class="active">{{ trans('rewardpointsgift::rewardpointsgifts.rewardpointsgift') }}</li>
@endcomponent

@component('admin::components.page.index_table')
    @slot('resource', 'rewardpointsgift')
    @slot('name', trans('rewardpointsgift::rewardpointsgifts.rewardpointsgift'))

    @component('admin::components.table')
        @slot('thead')
            <tr>
                @include('admin::partials.table.select_all')

                {{-- <th>{{ trans('admin::admin.table.id') }}</th> --}}
                {{-- <th>{{ trans('rewardpointsgift::rewardpointsgifts.table.first_name') }}</th>
                <th>{{ trans('rewardpointsgift::rewardpointsgifts.table.last_name') }}</th> --}}
                <th>{{ trans('rewardpointsgift::rewardpointsgifts.table.customer_name') }}</th>
                <th>{{ trans('rewardpointsgift::rewardpointsgifts.table.email') }}</th>
                <th>{{ trans('rewardpointsgift::rewardpointsgifts.table.reward_point_value') }}</th>
                <th>{{ trans('rewardpointsgift::rewardpointsgifts.table.reward_point_remarks') }}</th>
            </tr>
        @endslot
    @endcomponent
@endcomponent


@push('scripts')
    <script>
        new DataTable('#rewardpointsgift-table .table', {
            columns: [
                { data: 'checkbox', orderable: false, searchable: false, width: '3%' },
               // { data: 'id', width: '5%', orderable: true,searchable: false, width: '5%'},
                // { data: 'first_name', name: 'first_name', orderable: true,searchable: true, width: '20%' },
                // { data: 'last_name', name: 'last_name', orderable: true, width: '15%' },
                // { data: 'customer_name', name: 'customer_name', orderable: true,searchable: false, width: '25%' },
                { data: null, // Use null as the data source since we're not directly binding to a single attribute
                    render: function (data, type, row) {
                        const capitalizedFirstName = row.first_name.charAt(0).toUpperCase() + row.first_name.slice(1);
                        const capitalizedLastName = row.last_name.charAt(0).toUpperCase() + row.last_name.slice(1);
                        if (type === 'display') {
                            // Concatenate first_name and last_name attributes
                            return capitalizedFirstName + ' ' + capitalizedLastName;
                        } else {
                            // For sorting and filtering, return the concatenated data
                            return capitalizedFirstName + ' ' + capitalizedLastName;
                        }
                    },
                    name: 'customer_name', orderable: true,searchable: false, width: '25%' 
                },
                { data: 'email', name: 'email', orderable: true,searchable: true, width: '25%' },
                {
                    data: 'rewardpointsgift.reward_point_value',
                    render: function (data, type, row) {
                        if (data) {
                            return data; // If 'rewardpointsgift.reward_point_value' exists, return it
                        } else {
                            return '0'; // Provide a default value or message when it's null
                        }
                     }
                   
                },
                {
                    data: 'rewardpointsgift.reward_point_remarks',
                    render: function (data, type, row) {
                        if (data) {
                            return data; // If 'rewardpointsgift.reward_point_remarks' exists, return it
                        } else {
                            return '--'; // Provide a default value or message when it's null
                        }
                     }
                   
                }
                    
                    // data: 'rewardpointsgift.reward_point_value', name: 'reward_point_value', searchable: false, orderable: true, width: '20%' },
                // { data: 'rewardpointsgift.reward_point_remarks', name: 'reward_point_remarks', orderable: true,searchable: false, width: '20%' },
                // { data: 'rewardpointsgift.reward_point_value', name: 'reward_point_value', searchable: false, orderable: true, width: '20%' },
                // { data: 'rewardpointsgift.reward_point_remarks', name: 'reward_point_remarks', orderable: true,searchable: false, width: '20%' },
            ],
        });
    </script>
@endpush
