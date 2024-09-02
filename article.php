<?php
include "#include/config.php";
include "#include/#class/Autoload.php";

use App\ArticleService;

$articleService = new ArticleService();

// get all articles
$articles = $articleService->getTopHeadlines();

// Jumlah item per halaman
$itemsPerPage = 6;

// Ambil halaman saat ini dari query string, default ke 1 jika tidak ada
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page = max($page, 1); // Pastikan halaman tidak kurang dari 1

// Menghitung total halaman
$totalItems = isset($articles['total']) ? $articles['total'] : 0;
$totalPages = ceil($totalItems / $itemsPerPage); // Bulatkan halaman ke atas supaya total items sesuai

// Ambil data sesuai query parameter halaman / halaman saat ini
$articleData = isset($articles['data']) ? $articles['data'] : [];
$startIndex = ($page - 1) * $itemsPerPage;
$articleData = array_slice($articleData, $startIndex, $itemsPerPage);

// Meta data
$current_menu = "Article";
$current_sub_menu = NULL;
$title = "Article";

include __DIR__ . '/header.php';
include __DIR__ . '/#include/Components/ArticlePage.php';
include __DIR__ . '/footer.php';
