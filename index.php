<?php
session_start();
include_once "#include/config.php";
include_once "#include/#class/Autoload.php";

use App\Lib;
use App\ArticleService;
use App\ProductService;
use App\ClientService;
use App\MitraService;

$Lib = new Lib();
$productService = new ProductService();
$mitraService = new MitraService();
$articleService = new ArticleService();
$clientService = new ClientService();

// Get all products
$products = $productService->getProducts();

// Get all mitra
$mitras = $mitraService->getMitras();

// Get all articles
$articles = $articleService->getArticles();

// Get all clients
$clients = $clientService->getClients();

// Meta data
$current_menu = "Beranda";
$current_sub_menu = null;
$title = "Beranda";

include_once __DIR__ . '/header.php';
include_once __DIR__ . '/#include/component/layout/navbar.php';
include_once __DIR__ . '/#include/component/layout/main.php';
include_once __DIR__ . '/#include/component/article/article-section.php';
include_once __DIR__ . '/#include/component/product/product-section.php';
include_once __DIR__ . '/#include/component/mitra/mitra-section.php';
include_once __DIR__ . '/#include/component/layout/client-section.php';
include_once __DIR__ . '/#include/component/layout/about-section.php';
include_once __DIR__ . '/footer.php';
