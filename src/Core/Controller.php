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

    /**
     * Create page.
     */
    protected function render($view, $data = []): Page
    {
        return new Page($this->layout, $this->title, $view, $data);
    }
}
