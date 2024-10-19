<?php

/**
 * Yabasi Framework Configuration
 *
 * This file contains the core configuration settings for your Yabasi application.
 * Each section is clearly defined and documented for easy customization.
 *
 * @package Yabasi
 */

return [

    # === [ CORE APPLICATION SETTINGS ] ===================================== #
    #
    # Fundamental settings that shape your Yabasi application's behavior.
    # Adjust these carefully as they affect core functionality.

    'app' => [
        'name'    => 'Yabasi',
        'debug'   => true,   // ⚠️ Set to false in production environments
        'version' => '1.0.11'
    ],

    # === [ ASSET MANAGEMENT ] ============================================== #
    #
    # Control how your application handles and processes static assets.
    # Optimizing these can significantly improve load times.

    'asset' => [
        'minify' => true,  // Compress CSS and JS files for faster delivery
    ],

    # === [ SESSION HANDLING ] ============================================== #
    #
    # Configure how user sessions are managed in your application.
    # Proper session management is crucial for security and performance.

    'session' => [
        'driver'   => 'file',  // Options: file | database | redis
        'lifetime' => 120,     // Session duration in minutes
        'path'     => null,    // Custom session storage path (null for system default)
    ],

    # === [ FILE SYSTEM PATHS ] ============================================= #
    #
    # Define custom paths for various components of your application.
    # Ensuring correct paths is essential for smooth operation.

    'paths' => [
        'views'  => BASE_PATH . '/storage/views/',
        'cache'  => BASE_PATH . '/storage',
        'logs'   => BASE_PATH . '/storage/logs',
        'lang'   => BASE_PATH . '/storage/lang',
        'public' => BASE_PATH . '/public',
    ],

    # === [ LOGGING CONFIGURATION ] ========================================= #
    #
    # Specify how and where your application should log events and errors.
    # Proper logging is invaluable for debugging and monitoring.

    'logging' => [
        'file' => BASE_PATH . '/storage/logs/app.log',
    ],

    # === [ DATABASE SETTINGS ] ============================================= #
    #
    # Set up your database connection and related configurations.
    # Secure handling of these credentials is paramount.

    'database' => [
        'driver'   => 'mysql',
        'host'     => 'localhost',
        'database' => '',
        'username' => '',
        'password' => '',
        'migrations_path' => BASE_PATH . '/app/Migrations/',
    ],

    # === [ CACHING MECHANISM ] ============================================= #
    #
    # Configure caching to optimize performance and reduce server load.
    # Effective caching can dramatically speed up your application.

    'cache' => [
        'default' => 'file',  // Primary cache store
        'path'    => BASE_PATH . '/storage/cache',
        'stores'  => [
            'file'  => [
                'driver' => 'file',
                'path'   => BASE_PATH . '/storage/cache/data',
            ],
            'redis' => [
                'driver'     => 'redis',
                'connection' => 'default',
            ],
        ],
        'twig' => BASE_PATH . '/storage/cache/twig',  // Twig template cache
    ],

    # === [ REDIS CONFIGURATION ] =========================================== #
    #
    # Set up Redis for advanced caching and queuing capabilities.
    # Redis can significantly enhance your app's performance.

    'redis' => [
        'default' => [
            'host'     => '127.0.0.1',
            'password' => null,
            'port'     => 6379,
            'database' => 0,
        ],
    ],

    # === [ QUEUE SYSTEM ] ================================================== #
    #
    # Configure job queues for efficient background task processing.
    # Queues are essential for handling time-consuming tasks asynchronously.

    'queue' => [
        'default' => 'redis',
        'redis'   => [
            'scheme' => 'tcp',
            'host'   => '127.0.0.1',
            'port'   => 6379,
        ],
    ],

    # === [ CORS SETTINGS ] ================================================= #
    #
    # Manage Cross-Origin Resource Sharing (CORS) for API accessibility.
    # Crucial for modern web applications interfacing with your API.

    'cors' => [
        'allowed_origins'   => ['*'],
        'allowed_methods'   => ['*'],
        'allowed_headers'   => ['*'],
        'allow_credentials' => false,
        'max_age'           => 0,
    ],

];