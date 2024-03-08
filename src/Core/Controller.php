<?php
declare(strict_types = 1);

namespace Mild\Core;

/**
 * BaseController.
 */
class Controller
{
    protected $layout = "default";
    protected $title = "";

    /**
     * Create page.
     */
    protected function render($view, $data = [])
    {
        return new Page($this->layout, $this->title, $view, $data);
    }
}
