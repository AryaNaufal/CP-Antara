<?php

include "#include/config.php";
include "#include/#class/Autoload.php";

use App\DB;
use App\Lib;

$DB = new DB();
$Lib = new Lib();

$data = $DB->getProducts();

$products = $data['products'];

$current_menu = "home";
$current_sub_menu = NULL;
$title = "Home";

include_once __DIR__ . '/header.php';
include_once __DIR__ . '/#include/Components/Main.php';
include_once __DIR__ . '/#include/Components/AboutSection.php';
include_once __DIR__ . '/#include/Components/productsection.php';
include_once __DIR__ . '/#include/Components/PartnerSection.php';
include_once __DIR__ . '/#include/Components/ArticleSection.php';
include_once __DIR__ . '/footer.php';
