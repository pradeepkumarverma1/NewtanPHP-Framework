<?php

namespace App\Core;

/**
 * Core file for handling exceptions in the application
 * 
 * 
 */
class Exception
{

    public static function error($errorCode)
    {
        switch ($errorCode) {

            case 404:
                // TODO - Implement some templates
                echo "404";

                break;
        }
    }
}
