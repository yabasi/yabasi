<?php

return [
    'app' => [
        'name' => 'Yabasi',
        'debug' => true,
        'version' => '1.0.11'
    ],

    'asset' => [
        'minify' => true,
    ],

    'session' => [
        'driver' => 'file',
        'lifetime' => 120,
        'path' => null, // If left as null, the system will automatically choose an appropriate path
    ],

    'paths' => [
        'views'     => BASE_PATH . '/storage/views/',
        'cache'     => BASE_PATH . '/storage',
        'logs'      => BASE_PATH . '/storage/logs',
        'lang'      => BASE_PATH . '/storage/lang',
        'public'    => BASE_PATH . '/public',
    ],

    'logging' => [
        'file'   => BASE_PATH . '/storage/logs/app.log',
    ],

    'database' => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'database' => '',
        'username' => '',
        'password' => '',
        'migrations_path' => BASE_PATH . '/app/Migrations/',
    ],

    'cache' => [
        'default' => 'file', // 'file' or 'redis'
        'path' => BASE_PATH . '/storage/cache',
        'stores' => [
            'file' => [
                'driver' => 'file',
                'path' => BASE_PATH . '/storage/cache/data',
            ],
            'redis' => [
                'driver' => 'redis',
                'connection' => 'default',
            ],
        ],
        'twig' => BASE_PATH . '/storage/cache/twig',
    ],

    'redis' => [
        'default' => [
            'host' => '127.0.0.1',
            'password' => null,
            'port' => 6379,
            'database' => 0,
        ],
    ],

    'queue' => [
        'default' => 'redis',
        'redis' => [
            'scheme' => 'tcp',
            'host' => '127.0.0.1',
            'port' => 6379,
        ],
    ],

    'cors' => [
        'allowed_origins' => ['*'],
        'allowed_methods' => ['*'],
        'allowed_headers' => ['*'],
        'allow_credentials' => false,
        'max_age' => 0,
    ],

];