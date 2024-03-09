<?php

namespace Mild\Controller;

use Mild\Core\Controller;

class CardController extends Controller
{
    public function index(): \Mild\Core\Page
    {
        return $this->render('', []);
    }
}
