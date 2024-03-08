<?php
declare(strict_types = 1);

namespace Mild\Core;

/**
 * Check /config/routes.php.
 * Contains the path, controller and action of controller.
 */
class Route 
{
    private $path;
    private $controller;
    private $action;

    public function __construct($path, $controller, $action) {
        $this->path = $path;
        $this->controller = $controller;
        $this->action = $action;
    }

    public function __get($property) {
        return $this->$property;
    }
}

