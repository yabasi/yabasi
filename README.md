# Yabasi Framework

Yabasi is a cutting-edge, high-performance PHP framework designed for modern web application development. Built with scalability, flexibility, and developer productivity in mind, Yabasi provides a robust foundation for creating efficient and maintainable web applications.

Our framework stands out with its innovative approach to solving common web development challenges, offering a unique blend of performance optimization, intuitive APIs, and comprehensive features. Yabasi empowers developers to build sophisticated applications with ease, without compromising on speed or code quality.

## Features

- **Modular Structure**: Develop your application in independent and reusable modules.
- **Powerful ORM**: Intuitive and robust ORM for interacting with relational databases.
- **Routing**: Flexible and easily configurable routing system.
- **Middleware**: Strong middleware support for handling HTTP requests.
- **Dependency Injection**: Container-based DI for loosely coupled and testable code.
- **Caching**: Advanced cache management with File and Redis support.
- **CLI Tools**: Command-line tools to increase developer productivity.
- **Event System**: Flexible event system for managing application events.
- **Template Engine**: Powerful template processing with Twig integration.
- **Security**: Built-in security features such as CSRF protection and XSS prevention.
- **WebSocket Support**: WebSocket integration for real-time applications.
- **Migration System**: Powerful migration tools for managing database schemas.
- **Asset Management**: Efficiently manage CSS and JS files.

## Installation
You can add Yabasi Framework to your project using Composer:

```bash
composer require yabasi/framework
```

## Quick Start
To create a new Yabasi project:

```bash
composer create-project yabasi/yabasi myproject
cd myproject
```

These commands will create a new Yabasi project and start the built-in development server.

## Configuration
Basic configuration settings can be found in the `config/config.php` file.  
You can configure database, cache, and other service settings from here.

## Defining Routes
You can define your routes in the `routes/web.php` file:

```php
$router->get('/', function() {
    return 'Hello Yabasi!';
});

$router->get('/users', 'UserController@index');
```

## Creating Models
To create a new model, you can use the CLI tool:

```bash
php yabasi make:model User
```

This command will create the `app/Models/User.php` file.

## Database Operations
Performing database operations with Yabasi's ORM is quite easy:

```php
use App\Models\User;

// Get all users
$users = User::all();

// Find user by ID
$user = User::find(1);

// Create a new user
$newUser = new User();
$newUser->name = 'John';
$newUser->save();
```

## Using Middleware
You can define middlewares in the `app/Middleware` directory and add them to your routes:

```php
$router->get('/admin', 'AdminController@index')->middleware('auth');
```

## Using Events
You can define events in the `app/Events` directory and create listeners in the `app/Listeners` directory:

```php
use Yabasi\Events\EventDispatcher;

$dispatcher = new EventDispatcher();
$dispatcher->listen('user.registered', function($event) {
    // Event handling logic
});
```

## Using WebSockets
To start the WebSocket server:

```bash
php yabasi websocket:serve
```

## Tests
Yabasi allows you to write unit tests with PHPUnit. You can write your tests in the `test` directory.

## Contributing
If you want to contribute to the development of Yabasi, please review the CONTRIBUTING.md file.

## License
Yabasi Framework is licensed under the MIT license.

## Support
For questions or issues, you can use the GitHub Issues page or get support through the official forum.
