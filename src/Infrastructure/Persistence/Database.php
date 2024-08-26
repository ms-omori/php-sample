<?php

namespace App\Infrastructure\Persistence;

use PDO;
use PDOException;

class Database
{
    private $host = 'localhost';
    private $db   = 'todo_db';
    private $user = 'root';
    private $pass = 'password';
    private $charset = 'utf8mb4';
    private $pdo;
    private $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    public function __construct()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass, $this->options);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function getConnection()
    {
        return $this->pdo;
    }
}
