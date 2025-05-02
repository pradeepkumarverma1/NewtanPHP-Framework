<?php

namespace App\Core;


/**
 * Route class will handle the routing for the application
 */
class Route
{

    private static $routes = [];


    public static function get($url, $function)
    {
        self::$routes['get'][$url] = $function;
    }


    public static function handleRequest()
    {
        $currentPath = Router::getPath();
        $currentReqMethod = Router::getRequestMethod();

        if (isset(self::$routes['get'][$currentPath])) {

            if (gettype(self::$routes['get'][$currentPath]) != 'array') {

                echo call_user_func(self::$routes['get'][$currentPath]);

                exit;
            } else if (gettype(self::$routes['get'][$currentPath]) == 'array') {

                $controllerName = self::$routes['get'][$currentPath][0];
                $controllerMethod = self::$routes['get'][$currentPath][1];

                $controller = new $controllerName();
                $controller->$controllerMethod();

                exit;
            }
        } else {

            Exception::error(404);

            exit;
        }
    }
}
