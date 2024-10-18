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
            'Model Relationships' => 'Support for complex database relationships including One-to-One, One-to-Many, and Many-to-Many.',
            'Query Builder' => 'Fluent interface for constructing database queries.',
            'Database Seeding' => 'Easily populate your database with test data.',
            'Asset Management' => 'Built-in asset manager for handling CSS and JavaScript files.',
            'Localization' => 'Multi-language support for creating multilingual applications.',
            'Configuration Management' => 'Flexible configuration system with environment-specific settings.',
            'Error Handling' => 'Comprehensive error and exception handling system.',
            'WebSocket Support' => 'Built-in WebSocket server for real-time communication.',
            'Service Providers' => 'Modular system for bootstrapping and configuring application services.',
            'Filesystem Abstraction' => 'Unified API for working with local and cloud file storage systems.',
            'Form Requests' => 'Dedicated classes for handling form input and validation.',
            'Database Dump and Restore' => 'Built-in commands for database backup and restoration.',
            'Model Factories' => 'Generate test data easily with model factories.',
            'API Development Tools' => 'Built-in support for API development including rate limiting and versioning.',
            'Session Management' => 'Secure and flexible session handling.',
            'Database Query Logging' => 'Log and analyze database queries for performance optimization.',
            'Custom Artisan Commands' => 'Easily create custom CLI commands for your application.',
            'Eager Loading' => 'Optimize database queries with eager loading of relationships.',
            'Database Transactions' => 'Support for database transactions to ensure data integrity.',
            'Request Lifecycle' => 'Well-defined request lifecycle for precise control over application flow.',
            'Environment Detection' => 'Automatically detect and configure for different environments (development, production, etc.).',
            'Pagination' => 'Built-in pagination support for large datasets.',
            'Rate Limiting' => 'Protect your application from abuse with configurable rate limiting.',
            'Database Connection Pooling' => 'Efficient management of database connections for improved performance.',
            'Custom Validation Rules' => 'Easily extend the validation system with custom rules.',
            'Model Events' => 'Hook into model lifecycle events for complex operations.',
            'Database Schema Builder' => 'Programmatically define and modify database schema.',
            'Robust HTTP Client' => 'Built-in HTTP client for making external API requests.',
            'Redis Integration' => 'Built-in support for Redis, allowing for efficient caching, queues, and real-time features.',
            'Queue System' => 'Robust job queue system for handling time-consuming tasks asynchronously, improving application responsiveness.',
            'CORS Support' => 'Built-in Cross-Origin Resource Sharing (CORS) middleware for API security.',
            'Auto-loading' => 'PSR-4 compliant auto-loading for efficient class loading.',
            'Database Query Caching' => 'Automatic caching of database query results for improved performance.',
            'Advanced ORM' => 'Intuitive and powerful Object-Relational Mapping system for elegant database interactions.',
            'Flexible Templating Engine' => 'Feature-rich templating engine with custom extensions for efficient view rendering.',
            'Application Events' => 'Pre-defined application events for hooking into the framework\'s lifecycle.',
            'Dependency Graph' => 'Visualization tools for application\'s dependency graph.',
            'Robust Testing Suite' => 'Comprehensive testing utilities for unit, integration, and feature testing.',
            'Database Connection Abstraction' => 'Support for multiple database systems with a unified interface.',
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