<?php
session_start();
include_once "#include/config.php";
include_once "#include/#class/Autoload.php";

use App\Lib;

$Lib = new Lib();

if (!isset($_SESSION['user_id'])) {
    header("location: " . SERVER_NAME . "login.php");
}

if (isset($_POST['submit'])) {
    $_SESSION['data_npwp'] = "ADA";
    echo "<script>window.location.href = 'http://localhost/CP-Antara/product';</script>";
}

// Meta data
$current_menu = "form data npwp";
$current_sub_menu = null;
$title = "Form Data NPWP";

include_once __DIR__ . '/header.php';
include_once __DIR__ . '/#include/Components/Navbar.php';
include_once __DIR__ . '/#include/Components/FormData.php';
include_once __DIR__ . '/footer.php';
