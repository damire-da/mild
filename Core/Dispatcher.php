<?php

namespace Core;

class Dispatcher
{
    public function getPage(Track $track)
    {
        $className = ucfirst($track->controller) . "Controller";
        $fullName = "\\Project\\Controllers\\{$className}";

        try {
            $controller = new $fullName;

            if (method_exists($controller, $track->action)) {
                $result = $controller->{$track->action}($track->params);

                if ($result) {
                    return $result;
                }

                return new Page('default');
            } else {
                echo "Method <b>{$track->action}</b> is not find in $fullName";
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
            die();
        }
    
    }
}