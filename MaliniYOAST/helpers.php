<?php

if (!function_exists('malini_yoast_decorator')) {
    function malini_yoast_decorator()
    {
        return WithYOAST::class;
    }
}

if (!function_exists('check_malini_core')) {
    function check_malini_core()
    {
        if (!function_exists('malini')) {
            throw new Exception('Malini is not installed, in order to use this plugin you must install Malini core');
        }
    }
}
