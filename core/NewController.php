<?php

namespace App\Core;


class NewController extends View
{
    /**
     * View function will return the view file if it is present
     * 
     * @param string $filename
     * @param array $data
     */
    public function view($filename, $data = [])
    {
        View::getView($filename, $data);
    }
}
