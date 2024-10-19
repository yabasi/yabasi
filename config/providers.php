<?php

/**
 * Yabasi Framework Service Providers
 *
 * This file defines the core service providers that power the Yabasi framework.
 * Each provider is responsible for bootstrapping specific components and services.
 *
 * @package Yabasi
 */

return [

    # === [ FOUNDATION ] ==================================================== #
    #
    # These providers form the bedrock of the Yabasi framework.

    \Yabasi\Providers\ConfigServiceProvider::class,
    \Yabasi\Providers\DatabaseServiceProvider::class,
    \Yabasi\Providers\LoggerServiceProvider::class,

    # === [ HTTP LAYER ] ==================================================== #
    #
    # Providers handling HTTP requests, responses, and middleware.

    \Yabasi\Providers\RequestServiceProvider::class,
    \Yabasi\Providers\ResponseServiceProvider::class,
    \Yabasi\Providers\MiddlewareServiceProvider::class,

    # === [ SECURITY ] ====================================================== #
    #
    # Security-focused providers to keep your application safe.

    \Yabasi\Providers\CsrfServiceProvider::class,
    \Yabasi\Providers\SessionServiceProvider::class,

    # === [ APPLICATION SERVICES ] ========================================== #
    #
    # Core services that power various aspects of your application.

    \Yabasi\Providers\EventServiceProvider::class,
    \Yabasi\Providers\QueueServiceProvider::class,
    \Yabasi\Providers\CacheServiceProvider::class,

    # === [ PRESENTATION ] ================================================== #
    #
    # Providers related to views, templates, and asset management.

    \Yabasi\Providers\TemplateServiceProvider::class,
    \Yabasi\Providers\AssetServiceProvider::class,

    # === [ LOCALIZATION ] ================================================== #
    #
    # Provider for multi-language support.

    \Yabasi\Providers\TranslatorServiceProvider::class,

    # === [ DATA HANDLING ] ================================================= #
    #
    # Providers for data validation and database migrations.

    \Yabasi\Providers\ValidatorServiceProvider::class,
    \Yabasi\Providers\ValidationServiceProvider::class,
    \Yabasi\Providers\MigratorServiceProvider::class,

    # === [ CUSTOM PROVIDERS ] ============================================== #
    #
    # Add your custom service providers below this line.
    # Example: \App\Providers\CustomServiceProvider::class,

];