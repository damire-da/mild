<?php

/**
 * List route
 */

use Mild\Core\Route;

return [
    new Route('/', 'main', 'index'),
    new Route('/cards', 'card', 'index'),
    new Route('/login', 'auth', 'login'),
    new Route('/logout', 'auth', 'logout'),
    new Route('/register', 'auth', 'register'),
];
