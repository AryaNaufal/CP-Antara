<?php
include "#include/config.php";
include "#include/#class/Autoload.php";

use App\DB;
use App\Lib;

$DB = new DB();
$Lib = new Lib();

$data = $DB->getProducts();

$products = $data['products'];

$productDetail = isset($_GET['product-detail']) ? $_GET['product-detail'] : NULL;

if (empty($productDetail)) {
    $current_menu = "Products";
    $current_sub_menu = NULL;
    $title = "Products";

    include_once  __DIR__ . '/header.php';
    include_once __DIR__ . '/#include/Components/ProductPage.php';
    include_once __DIR__ . '/footer.php';
} else {
    $basename = basename($_SERVER['REQUEST_URI']);

    $productData = null;

    foreach ($products as $product) {
        if (strcasecmp($basename, $Lib->seo_title($product['slug'])) === 0) {
            $productData = $product;
            break;
        }
    }

    if (empty($productData)) {
        echo "<p>Product not found.</p>";
    }

    $current_menu =  $productData['name'];
    $current_sub_menu = NULL;
    $title = $productData['name'];

    include_once __DIR__ . '/header.php';
    include_once __DIR__ . '/#include/Components/ProductContent.php';
    include_once __DIR__ . '/footer.php';
}
