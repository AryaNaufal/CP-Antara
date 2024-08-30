<?php
include "#include/config.php";
include "#include/#class/Autoload.php";

use App\Lib;
use App\ProductService;

$Lib = new Lib();
$productService = new ProductService();

$products = $productService->getProducts();

$productId = isset($_GET['productId']) ?? NULL;

if (empty($productId)) {
    // Meta data
    $current_menu = "Product";
    $current_sub_menu = NULL;
    $title = "Product";

    include_once  __DIR__ . '/header.php';
    include_once __DIR__ . '/#include/Components/ProductPage.php';
    include_once __DIR__ . '/footer.php';
} else {
    $basename = basename($_SERVER['REQUEST_URI']);

    $item = null;

    // get selected product
    foreach ($products as $product) {
        if (strcasecmp($basename, $Lib->seo_title($product['slug'])) === 0) {
            $item = $product;
            break;
        }
    }

    if (empty($item)) {
        echo "<p>Product not found.</p>";
    }

    // Meta data
    $current_menu =  $item['name'];
    $current_sub_menu = NULL;
    $title = $item['name'];

    include_once __DIR__ . '/header.php';
    include_once __DIR__ . '/#include/Components/ProductContent.php';
    include_once __DIR__ . '/footer.php';
}
