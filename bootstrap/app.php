<?php

use App\Core\Route;

/**
 * Load the autoload file
 */
require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Register all the application routes
 */
require_once 'route.php';

/**
 * Process all the registered routes
 */
Route::handleRequest();
