<?php
declare(strict_types = 1);

namespace Mild\Core;

use Exception;
use \Mild\Controller;

/**
 * Dispatcher for call current Controller
 */
class Dispatcher
{
  /**
   * @param Track $track
   * @return Page|Exception
   */
    public function getPage(Track $track): Page|Exception
    {
        $className = "Mild\\Controller\\" . ucfirst($track->controller) . "Controller";

        try {
            $controller = new $className();

            if (method_exists($controller, $track->action)) {
              $result = $controller->{$track->action}($track->params);

              if ($result) {
                return $result;
              }

              return new Page('default', 'default page', '/views/default.php', []);
            }
        } catch (Exception $e) {
            return new Exception($e->getMessage());
        }
    }
}
