<?php

namespace App\Controllers;

use App\Core\NewController;

class HomepageController extends NewController
{
    public function welcome()
    {
        return $this->view('welcome');
    }
}
