<?php

/**
 * List route
 */

use Mild\Core\Route;

return [
    new Route('/', 'main', 'index'),
    new Route('/cards', 'card', 'index'),
];
