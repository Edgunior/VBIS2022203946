<?php

namespace app\core;

use PDO;
use PDOException;

class DbConnection
{
    public PDO $pdo;

    public function __construct()
    {
        $host = 'localhost';
        $db = 'discography';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

        try {
            $this->pdo = new PDO($dsn, $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Konekcija neuspešna: " . $e->getMessage());
        }
    }

    public function query(string $sql)
    {
        return $this->pdo->query($sql);
    }

    public function prepare(string $sql)
    {
        return $this->pdo->prepare($sql);
    }

    public function fetchList($stmt): array
    {
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetchOne($stmt)
    {
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}