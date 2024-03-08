<?php

namespace Mild\Controller;

use Mild\Core\Controller;
use Mild\Core\Page;

class MainController extends Controller
{
    public function main(): Page
    {
        return $this->render('/views/main.php');
    }
}
