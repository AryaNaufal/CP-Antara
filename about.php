<?php
session_start();
include_once "#include/config.php";
include_once "#include/#class/Autoload.php";

// Meta data
$current_menu = "Tentang Kami";
$current_sub_menu = null;
$title = "Tentang Kami";

include_once __DIR__ . '/header.php';
include_once __DIR__ . '/#include/component/layout/navbar.php';
include_once __DIR__ . '/#include/component/layout/about-section.php';
include_once __DIR__ . '/footer.php';
