<?php
namespace Core;

error_reporting(E_ALL);
ini_set('display_errors', 'on');

spl_autoload_register(function ($class) {
    $prefix = '';
    if (strpos($class, $prefix) === 0) {
        require_once __DIR__ .$class . 'php';
    }
 });