<?php

namespace Core;

/**
 * Model for work with database from /project/config/connection.php
 */
class Model 
{
    private static $pdo = null;

    public function __construct() 
    {
        if (self::$pdo === null) {
            try {
                self::$pdo = new \PDO(DB_DSN, DB_USER, DB_PASSWORD);
            } catch (\PDOException $e) {
                die($e->getMessage());
            }
        }
    }

    public function findOne($query) {
        $result = self::$pdo->query($query) or die(self::$pdo->errorInfo());
        return $result->fetch(\PDO::FETCH_ASSOC);
    }

    public function findAll($query) {
        $result = self::$pdo->query($query) or die(self::$pdo->errorInfo());
        $data = [];
        
        for ($data = []; $row = $result->fetch(\PDO::FETCH_ASSOC); $data[] = $row);
        
        return $data;
    }
}