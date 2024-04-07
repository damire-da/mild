<?php

namespace Mild\Controller;

use Mild\Core\Controller;

class CardController extends Controller
{
    public function index(): \Mild\Core\Page|false
    {
        return $this->render('biblia.php');
    }
}
