<?php
declare(strict_types = 1);

namespace Mild\Core;

/**
 * Object contains data for template.
 */
class Page
{
    private string $layout;
    private string $title;
    private string $view;
    private array $data;

    public function __construct($layout, $title, $view, $data) {
        $this->layout = $layout;
        $this->title = $title;
        $this->view = $view;
        $this->data = $data;
    }

    public function __get($property) 
    {
        return $this->$property;
    }
}
