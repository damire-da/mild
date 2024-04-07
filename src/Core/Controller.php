<?php
declare(strict_types = 1);

namespace Mild\Core;

/**
 * BaseController.
 */
class Controller
{
    protected string $layout = "default";
    protected string $title = "";
    protected static \PDO $conn;

    public function __construct(\PDO $conn)
    {
        self::$conn = $conn;
    }

  /**
     * Create page.
     */
    protected function render($view = '', $data = []): Page|false
    {
        return !empty($view)
          ? new Page($this->layout, $this->title, $view, $data)
          : false;
    }
}
