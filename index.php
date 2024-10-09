<?php
session_start();
include "#include/config.php";
include "#include/#class/Autoload.php";

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
$articles = $articleService->getTopHeadlines();
$articleData = $articles['data'] ?? null;

// Get all clients
$clients = $clientService->getClients();

// Meta data
$current_menu = "home";
$current_sub_menu = NULL;
$title = "Home";

include_once __DIR__ . '/header.php';
include_once __DIR__ . '/#include/Components/Navbar.php';
include_once __DIR__ . '/#include/Components/Main.php';
include_once __DIR__ . '/#include/Components/ArticleSection.php';
include_once __DIR__ . '/#include/Components/ProductSection.php';
include_once __DIR__ . '/#include/Components/PartnerSection.php';
include_once __DIR__ . '/#include/Components/ClientSection.php';
include_once __DIR__ . '/#include/Components/AboutSection.php';
include_once __DIR__ . '/footer.php';
