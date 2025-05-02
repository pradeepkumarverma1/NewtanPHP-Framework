<?php

use App\Controllers\HomepageController;
use App\Core\Route;

Route::get('/', [HomepageController::class, 'welcome']);

Route::handleRequest();
