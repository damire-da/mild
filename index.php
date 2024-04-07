<?php
namespace Mild\Core;

use PDO;
use PDOException;

require_once __DIR__ . '/vendor/autoload.php';

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once $_SERVER['DOCUMENT_ROOT'] . "/config/connection.php";

$db = Model::getInstance();
$conn = $db->getConnection();
$data = array_merge($_POST, $_GET);

$routes = require $_SERVER['DOCUMENT_ROOT'] . '/config/routes.php';
$track = Router::getTrack($routes, $_SERVER['REQUEST_URI'], $conn, $data);

$page = (new Dispatcher)->getPage($track);

echo (new View)->render($page);
