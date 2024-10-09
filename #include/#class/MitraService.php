<?php

namespace App;

class MitraService
{
    private $db;

    public function __construct()
    {
        $this->db = new DB(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    }

    public function getMitras(): array
    {
        $query = "SELECT id, name, image FROM mitra";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
