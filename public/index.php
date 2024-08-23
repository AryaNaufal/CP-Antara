<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Aryan\CpAntara\App\Router;
use Aryan\CpAntara\Controller\ArticleController;
use Aryan\CpAntara\Controller\HomeController;
use Aryan\CpAntara\Controller\ProductController;

Router::add('GET', '/', HomeController::class, 'index', []);
Router::add('GET', '/articles', ArticleController::class, 'index', []);
Router::add('GET', '/article/([0-9a-zA-Z]*)', ArticleController::class, 'content', []);
Router::add('GET', '/products', ProductController::class, 'index', []);

Router::run();
