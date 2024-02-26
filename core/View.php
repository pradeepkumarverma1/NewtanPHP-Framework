<?php

class View
{

    private static $viewPath = './resources/views/';

    public static function view($fileName)
    {

        if (file_exists(self::$viewPath . $fileName . '.php')) {

            return file_get_contents(self::$viewPath . $fileName . '.php');
        }
    }
}
