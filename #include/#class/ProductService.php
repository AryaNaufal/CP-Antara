<?php

namespace App;

class ProductService
{
    private $db;

    public function __construct()
    {
        $this->db = new DB(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    }

    public function getProducts(): array
    {
        $query = "SELECT id, name, slug, image FROM product";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
