<?php
namespace Config;

return [
    'defaults' => [
        'guard' => 'api',
        'password' => 'users',
    ],
    'guards' => [
        'api' =>[
            'driver' =>  'jwt',
            'provider' => 'users',
        ],
    ],
    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => \App\Model\User::class
        ]
    ]
];
