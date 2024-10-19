# Yabasi Framework

Yabasi is a cutting-edge, high-performance PHP framework designed for modern web application development. Built with scalability, flexibility, and developer productivity in mind, Yabasi provides a robust foundation for creating efficient and maintainable web applications.

Our framework stands out with its innovative approach to solving common web development challenges, offering a unique blend of performance optimization, intuitive APIs, and comprehensive features. Yabasi empowers developers to build sophisticated applications with ease, without compromising on speed or code quality.

<p align="center">
  <a href="https://packagist.org/packages/yabasi/framework"><img src="https://img.shields.io/packagist/v/yabasi/framework.svg" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/yabasi/framework"><img src="https://img.shields.io/packagist/dt/yabasi/framework.svg" alt="Total Downloads"></a>
  <a href="https://github.com/yabasi/framework/blob/main/LICENSE"><img src="https://img.shields.io/github/license/yabasi/framework.svg" alt="License"></a>
</p>

## Features

- **Fast Routing**: Powerful and flexible route management for efficient request handling.
- **Dependency Injection**: Robust container for managing class dependencies and performing dependency injection.
- **ORM Support**: Intuitive Object-Relational Mapping for seamless database operations.
- **Twig Integration**: Flexible and secure template engine for easy view rendering.
- **CLI Support**: Built-in console component for creating powerful command-line applications.
- **Middleware System**: Customizable middleware pipeline for request/response processing.
- **Event Dispatcher**: Flexible event handling and dispatching system for extending application functionality.
- **Caching**: Advanced caching mechanisms to optimize application performance.
- **Security Features**: Built-in security features including CSRF protection and XSS prevention.
- **Database Migrations**: Version control system for your database schema.
- **Validation**: Comprehensive data validation system for forms and input processing.
- **Logging**: Integrated logging system for debugging and monitoring application behavior.
- **Model Relationships**: Support for complex database relationships including One-to-One, One-to-Many, and Many-to-Many.
- **Query Builder**: Fluent interface for constructing database queries.
- **Database Seeding**: Easily populate your database with test data.
- **Asset Management**: Built-in asset manager for handling CSS and JavaScript files.
- **Localization**: Multi-language support for creating multilingual applications.
- **Configuration Management**: Flexible configuration system with environment-specific settings.
- **Error Handling**: Comprehensive error and exception handling system.
- **WebSocket Support**: Built-in WebSocket server for real-time communication.
- **Service Providers**: Modular system for bootstrapping and configuring application services.
- **Filesystem Abstraction**: Unified API for working with local and cloud file storage systems.
- **Form Requests**: Dedicated classes for handling form input and validation.
- **Database Dump and Restore**: Built-in commands for database backup and restoration.
- **Model Factories**: Generate test data easily with model factories.
- **API Development Tools**: Built-in support for API development including rate limiting and versioning.
- **Session Management**: Secure and flexible session handling.
- **Database Query Logging**: Log and analyze database queries for performance optimization.
- **Custom Artisan Commands**: Easily create custom CLI commands for your application.
- **Eager Loading**: Optimize database queries with eager loading of relationships.
- **Database Transactions**: Support for database transactions to ensure data integrity.
- **Request Lifecycle**: Well-defined request lifecycle for precise control over application flow.
- **Environment Detection**: Automatically detect and configure for different environments (development, production, etc.).
- **Pagination**: Built-in pagination support for large datasets.
- **Rate Limiting**: Protect your application from abuse with configurable rate limiting.
- **Database Connection Pooling**: Efficient management of database connections for improved performance.
- **Custom Validation Rules**: Easily extend the validation system with custom rules.
- **Model Events**: Hook into model lifecycle events for complex operations.
- **Database Schema Builder**: Programmatically define and modify database schema.
- **Robust HTTP Client**: Built-in HTTP client for making external API requests.
- **Redis Integration**: Built-in support for Redis, allowing for efficient caching, queues, and real-time features.
- **Queue System**: Robust job queue system for handling time-consuming tasks asynchronously, improving application responsiveness.
- **CORS Support**: Built-in Cross-Origin Resource Sharing (CORS) middleware for API security.
- **Auto-loading**: PSR-4 compliant auto-loading for efficient class loading.
- **Database Query Caching**: Automatic caching of database query results for improved performance.
- **Advanced ORM**: Intuitive and powerful Object-Relational Mapping system for elegant database interactions.
- **Flexible Templating Engine**: Feature-rich templating engine with custom extensions for efficient view rendering.
- **Application Events**: Pre-defined application events for hooking into the framework's lifecycle.
- **Dependency Graph**: Visualization tools for application's dependency graph.
- **Robust Testing Suite**: Comprehensive testing utilities for unit, integration, and feature testing.
- **Database Connection Abstraction**: Support for multiple database systems with a unified interface.


## Installation
You can create a new Yabasi Framework project using Composer:

```bash
composer create-project yabasi/yabasi myproject
cd myproject
```

This will create a new Yabasi project in the `myproject` directory. The project comes with a pre-configured application structure and all necessary dependencies.
If you want to add Yabasi Framework to an existing project, you can use:

```bash
composer require yabasi/framework
```

After installation, you'll need to set up your environment configuration and potentially run some initialization commands. Refer to the Configuration section for more details.

# Usage

## Routing

Define your routes in `routes/web.php`:

```php
$router->get('/', function() {
    return 'Hello Yabasi!';
});

$router->get('/users/{id}', 'UserController@show');

$router->group(['middleware' => [\Yabasi\Middleware\SessionMiddleware::class]], function ($router) {
   $router->get('/account', 'AccountController@index');
   $router->post('/account/update', 'AccountController@update');
});
```

## Controllers
Create a controller in `app/Controllers`:

```php
namespace App\Controllers;

use Yabasi\Http\Request;
use Yabasi\Http\Response;

class UserController extends Controller
{
    public function show(Request $request, $id)
    {
        $user = User::find($id);
        return $this->view('users.show', ['user' => $user]);
    }
}
```

## ORM
Interact with your database using the ORM:

```php
// Define a model
class User extends Model
{
    protected static string $table = 'users';

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

// Retrieve all users
$users = User::all();

// Find a specific user
$user = User::find(1);

// Create a new user
$user = new User();
$user->name = 'John Doe';
$user->email = 'john@example.com';
$user->save();

// Update a user
$user = User::find(1);
$user->name = 'Jane Doe';
$user->save();

// Delete a user
$user = User::find(1);
$user->delete();

// Query building
$users = User::where('active', true)
             ->orderBy('name', 'asc')
             ->limit(10)
             ->get();

// Relationships
$user = User::find(1);
$posts = $user->posts;
```

## Middleware
Create a middleware in `app/Middleware`:

```php
namespace App\Middleware;

use Closure;
use Yabasi\Http\Request;
use Yabasi\Http\Response;

class AuthMiddleware implements MiddlewareInterface
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->session->has('user_id')) {
            return redirect('/login');
        }
        return $next($request);
    }
}
```

## CLI Commands
Create a custom CLI command:

```php
namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateReportCommand extends Command
{
    protected static $defaultName = 'app:generate-report';

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Generating report...');
        // Report generation logic here
        $output->writeln('Report generated successfully!');
        return Command::SUCCESS;
    }
}
```

Run the command:
```bash
php yabasi app:generate-report
```

## Service Providers
Create a service provider in `app/Providers`:

```php
namespace App\Providers;

use Yabasi\ServiceProvider\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->container->singleton(MyService::class, function ($container) {
            return new MyService($container->get(DependencyClass::class));
        });
    }

    public function boot(): void
    {
        // Boot logic here
    }
}
```

## Localization
Set up localization files in `resources/lang/`:

```php
// storage/lang/en.json
return [
    'welcome' => 'Welcome to our application!',
    'goodbye' => 'Goodbye, see you soon!',
];

// resources/lang/es.json
return [
    'welcome' => '¡Bienvenido a nuestra aplicación!',
    'goodbye' => '¡Adiós, hasta pronto!',
];
```

Use translations in your code:

```php
echo __('messages.welcome');
```

## Validation
Validate input data:

```php
$validator = new Validator($request->all(), [
    'name' => 'required|string|max:255',
    'email' => 'required|email|unique:users',
    'password' => 'required|min:8|confirmed',
]);

if ($validator->fails()) {
    return redirect()->back()->withErrors($validator);
}
```

## Caching
Use the caching system:

```php
// Set a value in the cache
Cache::set('key', 'value', 3600);

// Get a value from the cache
$value = Cache::get('key', 'default');

// Remove a value from the cache
Cache::delete('key');

// Check if a key exists in the cache
if (Cache::has('key')) {
    // ...
}
```

## Events
Dispatch and listen for events:

```php
// Dispatch an event
$dispatcher = new EventDispatcher();
$dispatcher->dispatch(new UserRegisteredEvent($user));

// Listen for an event
$dispatcher->listen(UserRegisteredEvent::class, function($event) {
    // Handle the event
});
```

## Database Migrations
Create a migration:

```php
php yabasi make:migration create_users_table
```

Define the migration:

```php
use Yabasi\Database\Connection;
use Yabasi\Database\Migrations\MigrationInterface;

class CreateUsersTable implements MigrationInterface
{
    public function up(Connection $connection): void
    {
        $connection->schema()->create('users', function ($table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    public function down(Connection $connection): void
    {
        $connection->schema()->dropIfExists('users');
    }
}
```

Run migrations:
```php
php yabasi migrate
```

## WebSockets
Set up a WebSocket server:

```php
namespace App\WebSockets;

use Ratchet\ConnectionInterface;
use Yabasi\WebSocket\BaseWebSocketServer;

class ChatServer extends BaseWebSocketServer
{
    public function onMessage(ConnectionInterface $from, $msg)
    {
        foreach ($this->clients as $client) {
            $client->send($msg);
        }
    }
}
```

Start the WebSocket server:
```php
php yabasi websocket:serve
```

## Queue System
Define a job:

```php
namespace App\Jobs;

use Yabasi\Queue\Job;

class SendEmailJob extends Job
{
    protected $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function handle()
    {
        // Send email logic here
    }
}
```

Dispatch a job:

```php
$queueManager->push(new SendEmailJob('user@example.com'));
```

Process jobs:

```php
php yabasi queue:work
```

## Testing
Run the test suite:

```php
vendor/bin/phpunit
```

## Documentation
For more detailed information, please refer to our official documentation.

## Contributing
We welcome contributions to the Yabasi Framework. Please see our [CONTRIBUTING.md](CONTRIBUTING.md) file for details on how to contribute.

## License
The Yabasi Framework is open-sourced software licensed under the MIT license.
