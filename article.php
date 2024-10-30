<?php
session_start();
include "#include/config.php";
include "#include/#class/Autoload.php";

use App\ArticleService;
use App\Lib;

$Lib = new Lib();
$articleService = new ArticleService();

// get all articles
$articles = $articleService->getArticles();

// Jumlah item per halaman
$itemsPerPage = 6;

// Ambil halaman saat ini dari query string, default ke 1 jika tidak ada
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page = max($page, 1); // Pastikan halaman tidak kurang dari 1

// Menghitung total halaman
$totalItems = isset($articles['total']) ? $articles['total'] : 0;
$totalPages = ceil($totalItems / $itemsPerPage); // Bulatkan halaman ke atas supaya total items sesuai

// Meta data
$current_menu = "Artikel";
$current_sub_menu = null;
$title = "Artikel";

$uri_parts = explode('/', $_SERVER['REQUEST_URI']);

foreach ($articles as $article) {
  $articleData = $article;
  if (end($uri_parts) === $Lib->seoTitle($articleData['headlines'])) {
    $title = $articleData['headlines'];
    $current_menu = $articleData['headlines'];
    include_once __DIR__ . '/header.php';
    include_once __DIR__ . '/#include/component/layout/navbar.php';
    include_once __DIR__ . '/#include/component/article/article-content.php';
    include_once __DIR__ . '/footer.php';
    exit;
  }
}

include_once __DIR__ . '/header.php';
include_once __DIR__ . '/#include/component/layout/navbar.php';
include_once __DIR__ . '/#include/component/article/page/index.php';
include_once __DIR__ . '/footer.php';
