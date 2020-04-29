<?php

use Jenssegers\Blade\Blade;

if (!function_exists('dd')) {
    function dd($var)
    {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
        die();
    }
}

if (!function_exists('view')) {
    function view($view, $data = array())
    {
        try {
            $blade = new Blade(APPPATH . 'views', APPPATH . 'cache' . DIRECTORY_SEPARATOR . 'views');
            echo $blade->make($view, $data)->render();
        } catch (\Exception $e) {
            // echo empty page to reload page
            dd('please reload page');
        }
    }
}
