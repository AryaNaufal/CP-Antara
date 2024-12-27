<?php

session_start();
include_once "#include/config.php";
include_once "#include/#class/Autoload.php";

use App\ClientService;

$clientService = new ClientService();

// Get all clients
$clients = $clientService->getClients();

// Meta data
$current_menu = "Klien";
$current_sub_menu = null;
$title = "Klien";

include_once __DIR__ . '/header.php';
include_once __DIR__ . '/#include/component/layout/navbar.php';
include_once __DIR__ . '/#include/component/layout/klien-layout.php';
include_once __DIR__ . '/footer.php';
