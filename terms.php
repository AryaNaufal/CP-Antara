<?php
session_start();
include "#include/config.php";
include "#include/#class/Autoload.php";

// Meta data
$current_menu = "terms";
$current_sub_menu = NULL;
$title = "Terms";

include_once __DIR__ . '/header.php';
include_once __DIR__ . '/#include/Components/Navbar.php';
include_once __DIR__ . '/#include/Components/TermsPage.php';
include_once __DIR__ . '/footer.php';
