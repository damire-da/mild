<?php

namespace Mild\Controller;

use Mild\Core\Controller;
use Mild\Core\Page;

class MainController extends Controller
{
    public function index(): Page
    {
        return $this->render('main.php');
    }
}
