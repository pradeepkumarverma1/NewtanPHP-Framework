<?php


require_once('./core/View.php');

class HomepageController
{

    public static function home()
    {
        return View::view('hello');
    }
}
