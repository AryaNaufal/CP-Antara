<?php

namespace App;

use PDO;
use PDOException;

class DB
{
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $port;

    public function __construct($host, $user, $pass, $db, $port = '3306')
    {
        $this->host = $host;
        $this->username = $user;
        $this->password = $pass;
        $this->dbname = $db;
        $this->port = $port;
    }

    public function getConnection()
    {
        $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->dbname};";
        try {
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Koneksi gagal: " . $e->getMessage();
            return null;
        }
    }
}
