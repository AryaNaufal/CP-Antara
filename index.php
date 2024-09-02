<?php
session_start();

// Check if splash screen has been shown
if (empty($_SESSION['splash_shown'])) {
    // Redirect to splash screen if not shown
    include_once __DIR__ . '/#include/Components/Splash.php';
    exit();
}

include "#include/config.php";
include "#include/#class/Autoload.php";

use App\Lib;
use App\ArticleService;
use App\ProductService;

$Lib = new Lib();
$productService = new ProductService();
$articleService = new ArticleService();

// Get all products
$products = $productService->getProducts();

// Get all articles
$articles = $articleService->getTopHeadlines();
$articleData = $articles['data'] ?? null;

// Meta data
$current_menu = "home";
$current_sub_menu = NULL;
$title = "Home";

include_once __DIR__ . '/header.php';
include_once __DIR__ . '/#include/Components/Main.php';
include_once __DIR__ . '/#include/Components/AboutSection.php';
include_once __DIR__ . '/#include/Components/ProductSection.php';
include_once __DIR__ . '/#include/Components/PartnerSection.php';
include_once __DIR__ . '/#include/Components/ArticleSection.php';
include_once __DIR__ . '/footer.php';
