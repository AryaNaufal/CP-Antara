<?php
session_start();
include "#include/config.php";
include "#include/#class/Autoload.php";

// Meta data
$current_menu = "privacy";
$current_sub_menu = NULL;
$title = "Privacy";

include_once __DIR__ . '/header.php';
include_once __DIR__ . '/#include/Components/Navbar.php';
include_once __DIR__ . '/#include/Components/PrivacyPage.php';
include_once __DIR__ . '/footer.php';
