<?php
namespace Core;

class Router {
    private $routes;

    public static function getTrack ($routes, $uri) 
    {
        foreach ($routes as $route) {  
            // TODO: функция, которая будет получать из uri параметры.
            if (str_replace('/', '', $route->path) === str_replace('/', '', $uri)) {
                $params = $uri;
                return new Track($route->controller, $route->action, $params);
            }
        }

        return [];
    }
}