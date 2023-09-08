<?php

return [
    'admin.rewardpointsgift' => [
        'index' => 'rewardpointsgift::permissions.index',
        'create' => 'rewardpointsgift::permissions.create',
        'edit' => 'rewardpointsgift::permissions.edit',
        'destroy' => 'rewardpointsgift::permissions.destroy',
    ],
    'admin.customerrewardpoints' => [
        'index' => 'rewardpointsgift::customer_permissions.index',
        'create' => 'rewardpointsgift::customer_permissions.create',
        'edit' => 'rewardpointsgift::customer_permissions.edit',
        'destroy' => 'rewardpointsgift::customer_permissions.destroy',
    ],
];
