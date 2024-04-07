<?php
declare(strict_types = 1);

namespace Mild\Core;

/**
 * Model for work with database from /Project/config/connection.php
 */
class Model 
{
    private static ?Model $instance = null;
    private ?\PDO $pdo = null;

    public function __construct() 
    {
        if ($this->pdo === null) {
            try {
              $this->pdo = new \PDO(DB_DSN, DB_USER, DB_PASSWORD);
            } catch (\PDOException $e) {
                die($e->getMessage());
            }
        }
    }

    public static function getInstance(): Model
    {
        if (self::$instance === null) {
            self::$instance = new Model();
        }

        return self::$instance;
    }

    public function getConnection(): \PDO
    {
        return $this->pdo;
    }

    public function findOne($query) {
        $result = $this->pdo->query($query) or die($this->pdo->errorInfo());
        return $result->fetch(\PDO::FETCH_ASSOC);
    }

    public function findAll($query) {
        $result = $this->pdo->query($query) or die($this->pdo->errorInfo());
        $data = [];
        
        for ($data = []; $row = $result->fetch(\PDO::FETCH_ASSOC); $data[] = $row);
        
        return $data;
    }
}
