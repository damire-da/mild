<?php
namespace Mild\Core;

use PDO;
use PDOException;

require_once __DIR__ . '/vendor/autoload.php';

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once $_SERVER['DOCUMENT_ROOT'] . "/config/connection.php";

try {
  // Óñòàíàâëèâàåì ñîåäèíåíèå ñ áàçîé äàííûõ
  $pdo = new PDO(DB_DSN, DB_USER,DB_PASSWORD);

  // Óñòàíàâëèâàåì ğåæèì îáğàáîòêè îøèáîê PDO íà èñêëş÷åíèÿ
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  // Âûâîäèì ñîîáùåíèå îá îøèáêå
  die($e->getMessage());
}

$routes = require $_SERVER['DOCUMENT_ROOT'] . '/config/routes.php';

$track = Router::getTrack($routes, $_SERVER['REQUEST_URI']);

$page = (new Dispatcher)->getPage($track);

echo (new View)->render($page);
