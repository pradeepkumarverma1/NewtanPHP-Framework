<?php

class Route
{
    private $accessedUrl;
    private $requestMethod;

    public function __construct()
    {
        $this->accessedUrl = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';
        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
    }


    public static function get($url, $function)
    {
        $route = new Route();

        if ($url == $route->accessedUrl && $route->requestMethod == 'GET') {

            echo $function();
            exit;
        }
    }

    public static function post($url, $function)
    {
        $route = new Route();

        if ($url == $route->accessedUrl) {

            if ($route->requestMethod == 'POST') {

                echo 'post method accessed';
            } else {

                echo 'GET METHOD not allowed for this url';
            }
        }
        exit;
    }
}
