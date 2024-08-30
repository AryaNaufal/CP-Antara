<?php
include "#include/config.php";
include "#include/#class/Autoload.php";

use App\ArticleService;

$articleService = new ArticleService();

// get all articles
$articles = $articleService->getTopHeadlines();
$articleData = $articles['data'];

// Meta data
$current_menu = "Article";
$current_sub_menu = NULL;
$title = "Article";

include __DIR__ . '/header.php';
include __DIR__ . '/#include/Components/ArticlePage.php';
include __DIR__ . '/footer.php';
