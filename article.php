<?php
include "#include/config.php";
include "#include/#class/Autoload.php";

$current_menu = "Article";
$current_sub_menu = NULL;
$title = "Article";

include __DIR__ . '/header.php';
include __DIR__ . '/#include/Components/ArticlePage.php';
include __DIR__ . '/footer.php';
