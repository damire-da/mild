<?php
declare(strict_types = 1);

namespace Mild\Core;

/**
 * Current Route object for call.
 */
class Track 
{
    private string $controller;
    private string $action;
    private array $params;
    private \PDO $conn;

    public function __construct($controller, $action, $params, $conn) {
        $this->controller = $controller;
        $this->action = $action;
        $this->params = $params;
        $this->conn = $conn;
    }

    public function __get($property) {
        return $this->$property;
    }
}

