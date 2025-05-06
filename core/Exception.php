<?php

namespace App\Core;

use App\Core\traits\ExceptionTemplateLoader;

/**
 * Core file for handling exceptions in the application
 */
class Exception
{
    use ExceptionTemplateLoader;

    public static function error($errorCode)
    {
        (new self)->loadErrorTemplate($errorCode);
    }
}
