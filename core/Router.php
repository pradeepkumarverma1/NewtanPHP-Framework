<?php

namespace App\Core;

/**
 * Get the urls and execute them
 */
class Router
{

    public static function getPath()
    {
        return $_SERVER['PATH_INFO'] ?? '/';
    }

    public static function getRequestMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
