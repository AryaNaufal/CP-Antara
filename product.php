<?php
session_start();
include_once "#include/config.php";
include_once "#include/#class/Autoload.php";

use App\Lib;
use App\ProductService;

$Lib = new Lib();
$productService = new ProductService();

$products = $productService->getProducts();

$productId = isset($_GET['productId']) ?? null;

// Filtered Product
$eventProduct = array_filter($products, function ($product) {
    return in_array($product['name'], ['Antara Heritage Center']);
});

$mitraProduct = array_filter($products, function ($product) {
    return in_array($product['name'], ['Bloomberg', 'Reuters']);
});

$affiliateProduct = array_filter($products, function ($product) {
    return in_array($product['name'], ['HCM Ads Media']);
});

// Sisa Product
$sisaProduct = array_filter($products, function ($product) use ($mitraProduct, $affiliateProduct) {
    $excludedProducts = array_merge($mitraProduct, $affiliateProduct);
    return !in_array($product, $excludedProducts);
});

echo "<script>console.log(" . json_encode($sisaProduct) . ");</script>";

if (empty($productId)) {
    // Meta data
    $current_menu = "Produk";
    $current_sub_menu = null;
    $title = "Produk";

    include_once __DIR__ . '/header.php';
    include_once __DIR__ . '/#include/component/layout/navbar.php';
    include_once __DIR__ . '/#include/component/product/product-list.php';
    include_once __DIR__ . '/footer.php';
} else {
    $basename = basename($_SERVER['REQUEST_URI']);

    $item = null;

    // get selected product
    foreach ($products as $product) {
        if (strcasecmp($basename, $Lib->seoTitle($product['slug'])) === 0) {
            $item = $product;
            break;
        }
    }

    if (empty($item)) {
        echo "<p>Product not found.</p>";
    }

    // Meta data
    $current_menu =  $item['name'] ?? null;
    $current_sub_menu = null;
    $title = $item['name'] ?? null;

    include_once __DIR__ . '/header.php';
    include_once __DIR__ . '/#include/component/layout/navbar.php';
    include_once __DIR__ . '/#include/component/product/product-content.php';
    include_once __DIR__ . '/footer.php';
}
