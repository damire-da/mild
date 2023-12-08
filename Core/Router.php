<?php
namespace Core;

/**
 * Router return object Track and Track is the current Route need to call.
 */
class Router
{
    private $routes;

    public static function getTrack($routes, $uri)
    {
        foreach ($routes as $route) {
            $pattern = self::createPattern($route->path);

            if (preg_match($pattern, $uri, $params)) {                
                $params = self::clearParams($params);
                return new Track($route->controller, $route->action, $params);
            }
        }

        return [];
    }

    /*
        Метод преобразует путь из роута в регуляку,
        подставляя вместо параметров роута именованные карманы
        см. тут про такие карманы http://code.mu/ru/php/video/named-pockets-in-php-regulars/
    
        к примеру, из адреса '/test/:var1/:var2/' метод
        сделает регулярку '#^/test/(?<var1>[^/]+)/(?<var2>[^/]+)/?$#'
    */
    private static function createPattern($path)
    {
        return '#^' . preg_replace('#/:([^/]+)#', '/(?<$1>[^/]+)', $path) . '/?$#';
    }
    
    private static function clearParams($params)
    {
        $result = [];
        
        foreach ($params as $key => $param) {
            if (!is_int($key)) {
                $result[$key] = $param;
            }
        }
        
        return $result;
    }
}