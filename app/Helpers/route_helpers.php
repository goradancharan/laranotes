<?php

use Illuminate\Support\Facades\Request;

if (!function_exists('isActive')) {
    
    function isActive($routes)
    {
        foreach ((array) $routes as $route) {
            if (Request::routeIs($route)) {
                return 'active';
            }
        }
        return '';
    }
}
