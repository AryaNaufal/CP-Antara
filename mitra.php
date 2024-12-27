<?php

session_start();
include_once "#include/config.php";
include_once "#include/#class/Autoload.php";

use App\MitraService;

$mitraService = new MitraService();

// Get all mitra
$mitras = $mitraService->getMitras();

// Meta data
$current_menu = "Mitra";
$current_sub_menu = null;
$title = "Mitra";

include_once __DIR__ . '/header.php';
include_once __DIR__ . '/#include/component/layout/navbar.php';
include_once __DIR__ . '/#include/component/layout/mitra-layout.php';
include_once __DIR__ . '/footer.php';
