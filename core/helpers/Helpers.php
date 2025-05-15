<?php

use App\Core\View;

/**
 * Render a view template with optional data.
 *
 * This helper function loads the specified view file and
 * passes the provided data array to it for rendering.
 *
 * @param string $fileName The name or path of the view file to load.
 * @param array $data An associative array of data to be extracted and made available to the view.
 * @return void
 */
if (!function_exists('view')) {
    function view($fileName, $data = [])
    {
        View::getView($fileName, $data);
    }
}
