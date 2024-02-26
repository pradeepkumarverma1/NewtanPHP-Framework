<?php

require_once('route.php');
require_once('./controllers/HomepageController.php');

Route::get('/', [HomepageController::class, 'home']);

Route::get('/hello', function () {
    echo "hello world";
});

Route::get('/cool', function () {
    echo "I am feeling cool";
});

Route::post('/hello', function () {
    return 'okay';
});
