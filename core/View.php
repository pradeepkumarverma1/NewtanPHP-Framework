<?php

namespace App\Core;

/**
 * View class will handle the displaying of view file
 */
class View
{

    private static $viewPath = '../resources/views/';

    public static function getView($fileName, $data = [])
    {

        $fullFilePath = self::$viewPath . $fileName . '.php';

        if (str_contains($fileName, '.')) {

            $fileName = str_replace('.', '/', $fileName);
        }

        if (file_exists($fullFilePath)) {

            extract($data);

            ob_start();

            include $fullFilePath;

            return ob_flush();
        } else {

            echo ('No view file was found.');
        }
    }
}
