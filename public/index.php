<?php

/**
 * Yabasi Framework - Application Entry Point
 *
 * This file serves as the front controller for your Yabasi application.
 * It bootstraps the application and handles the initial request.
 *
 * @package Yabasi
 * @version 1.0.11
 */

# === [ BOOTSTRAP ] ======================================================== #
#
# Define the base path and load the Composer autoloader.

define('BASE_PATH', dirname(__DIR__));
require BASE_PATH . '/vendor/autoload.php';

# === [ APPLICATION INITIALIZATION ] ======================================== #
#
# Bootstrap and run the Yabasi application.

use Yabasi\Bootstrap;

$app = new Bootstrap();

# === [ ERROR HANDLING ] =================================================== #
#
# Wrap the application execution in a try-catch block to handle exceptions.
# In a production environment, you might want to log errors instead of
# displaying them, and show a user-friendly error page.

try {
    $app->run();
} catch (Exception $e) {
    # For development: Display detailed error information
    echo "Error: " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . " on line " . $e->getLine() . "\n";
    echo "Stack trace:\n" . $e->getTraceAsString() . "\n";

    # For production: You might want to log the error and display a generic message
    // error_log($e);
    // echo "An unexpected error occurred. Please try again later.";
}