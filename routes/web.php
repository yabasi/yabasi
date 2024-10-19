<?php

/**
 * Yabasi Framework - Web Routes
 *
 * This file defines the web routes for your Yabasi application.
 * Here you can register routes for your web interface and API endpoints.
 *
 * @package Yabasi
 */

use Yabasi\Routing\Router;

return function (Router $router) {

    # === [ MAIN ROUTES ] =================================================== #
    #
    # Define your primary application routes here. These routes typically
    # render views or handle basic functionality.

    $router->get('/', 'IndexController@index');

    // $router->get('/about', 'PageController@about');
    // $router->get('/contact', 'PageController@contact');

    # === [ AUTHENTICATED ROUTES ] ========================================== #
    #
    # Routes that require authentication should be placed here. Use middleware
    # to ensure only authenticated users can access these routes.

    // $router->group(['middleware' => [\Yabasi\Middleware\AuthMiddleware::class]], function ($router) {
    //     $router->get('/dashboard', 'DashboardController@index');
    //     $router->get('/profile', 'UserController@profile');
    // });

    # === [ FORM HANDLING ROUTES ] ========================================== #
    #
    # Routes for handling form submissions. These often use POST, PUT, or DELETE methods.

    // $router->post('/contact', 'PageController@submitContact');
    // $router->post('/newsletter/subscribe', 'NewsletterController@subscribe');

    # === [ API ROUTES ] ==================================================== #
    #
    # API routes are defined here. These routes typically return JSON responses
    # and are used for AJAX requests or mobile apps.

    // $apiRouter = new \Yabasi\Routing\ApiRouter($router);
    // $apiRouter->setVersion('v1')->group([], function ($router) {
    //     $router->resource('users', 'UserApiController');
    //     $router->get('/posts', 'PostApiController@index');
    //     $router->post('/posts', 'PostApiController@store');
    // });

    # === [ MIDDLEWARE USAGE ] ============================================== #
    #
    # Middleware can be applied to individual routes or groups of routes.
    # Here are some examples of how to use middleware in your routes.

    // Apply middleware to a group of routes
    // $router->group(['middleware' => [\Yabasi\Middleware\SessionMiddleware::class]], function ($router) {
    //     $router->get('/account', 'AccountController@index');
    //     $router->post('/account/update', 'AccountController@update');
    // });

    # === [ ERROR HANDLING ROUTES ] ========================================= #
    #
    # Define custom error handling routes here if your application supports it.

    // $router->get('/404', 'ErrorController@notFound');
    // $router->get('/500', 'ErrorController@serverError');

};