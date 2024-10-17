<?php

namespace Yabasi\Controllers;

use Yabasi\Config\Config;
use Yabasi\Container\Container;
use Yabasi\Controller\Controller;
use Yabasi\Http\Request;
use Yabasi\Http\Response;

class IndexController extends Controller
{
    protected mixed $config;

    public function __construct(Container $container)
    {
        parent::__construct($container);

        $this->config = $container->get(Config::class);
    }

    public function index(Request $request): Response
    {
        $features = [
            'Fast Routing' => 'Powerful and flexible route management for efficient request handling.',
            'Dependency Injection' => 'Robust container for managing class dependencies and performing dependency injection.',
            'ORM Support' => 'Intuitive Object-Relational Mapping for seamless database operations.',
            'Twig Integration' => 'Flexible and secure template engine for easy view rendering.',
            'CLI Support' => 'Built-in console component for creating powerful command-line applications.',
            'Middleware System' => 'Customizable middleware pipeline for request/response processing.',
            'Event Dispatcher' => 'Flexible event handling and dispatching system for extending application functionality.',
            'Caching' => 'Advanced caching mechanisms to optimize application performance.',
            'Security Features' => 'Built-in security features including CSRF protection and XSS prevention.',
            'Database Migrations' => 'Version control system for your database schema.',
            'Validation' => 'Comprehensive data validation system for forms and input processing.',
            'Logging' => 'Integrated logging system for debugging and monitoring application behavior.',
        ];

        $version = $this->config->get('app.version', '1.0.6');

        return $this->view('index', [
            'frameworkName' => 'Yabasi Framework',
            'version' => $version,
            'description' => 'A powerful, flexible, and modern PHP framework designed for rapid application development',
            'features' => $features,
            'year' => date('Y'),
            'pageTitle' => 'Yabasi Framework - Modern PHP Development Made Simple',
            'metaDescription' => 'Yabasi is a powerful, flexible PHP framework for building modern web applications. Featuring fast routing, ORM support, and advanced security features.',
            'ogImage' => 'https://yabasi.com/images/og-image.png',
            'twitterUsername' => '@abbaskandemir',
        ]);
    }
}