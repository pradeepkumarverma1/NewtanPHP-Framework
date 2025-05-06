<?php

namespace App\Core\traits;

trait ExceptionTemplateLoader
{
    private $exceptionTemplateFolder = __DIR__ . '/../templates/exceptions/';

    public function loadErrorTemplate(int $exceptionCode)
    {
        switch ($exceptionCode) {
            case 404:
                include $this->exceptionTemplateFolder . "$exceptionCode.php";
        }
    }
}
