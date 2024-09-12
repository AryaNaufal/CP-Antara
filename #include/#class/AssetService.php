<?php

namespace App;

class AssetService
{
    private $db;
    public function __construct()
    {
        $this->db = new DB(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    }

    public function getAssets(): array
    {
        $query = "SELECT id, type, url FROM assets";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
