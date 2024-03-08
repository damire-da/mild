<?php
declare(strict_types = 1);

namespace Mild\Core;

/**
 * View render HTML from object Page
 */
class View
{
    public function render(Page $page): false|string|null
    {
        return $this->renderLayout($page, $this->renderView($page));
    }

    private function renderLayout(Page $page, $content): false|string|null
    {
        $layoutPath = $_SERVER['DOCUMENT_ROOT'] . "/layouts/{$page->layout}.php";
        
        if (file_exists($layoutPath)) {
            ob_start();
            $title = $page->title;
            include $layoutPath;
            return ob_get_clean();
        }

        return null;
    }

    private function renderView(Page $page): false|string|null
    {
        $viewPath = $_SERVER['DOCUMENT_ROOT'] . "/src/views/{$page->view}.php";

        if (file_exists($viewPath)) {
            ob_start();
            $data = $page->data;
            extract($data);
            include $viewPath;
            return ob_get_clean();
        }

        return null;
    }
}
