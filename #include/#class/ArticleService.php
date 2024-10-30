<?php

namespace App;

class ArticleService
{
    private $db;

    public function __construct()
    {
        $this->db = new DB(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    }

    public function getArticles(): array
    {
        $query = "SELECT id, img, headlines, content, created_at FROM article";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
