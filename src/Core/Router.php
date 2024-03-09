<?php
declare(strict_types = 1);

namespace Mild\Core;

/**
 * Router return object Track and Track is the current Route need to call.
 */
class Router
{
    public static function getTrack($routes, $uri): Track|array
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

    /**
     * The method converts the path from a route to a regular expression
     * For example, from the address method '/test/:var1/:var2/'
     * our regular sequence '#^/test/(?<var1>[^/]+)/(?<var2>[^/]+)/?$#'
     */
    private static function createPattern($path): string
    {
        return '#^' . preg_replace('#/:([^/]+)#', '/(?<$1>[^/]+)', $path) . '/?$#';
    }
    
    /**
     * Clear $params from numeric key
     */
    private static function clearParams($params): array
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
